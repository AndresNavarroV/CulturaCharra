import pandas as pd
import numpy as np
from sklearn.neighbors import NearestNeighbors
import joblib
import spotipy
from spotipy.oauth2 import SpotifyOAuth
import os
import sys
import json

# --- Configuración de Spotify ---
SPOTIFY_CLIENT_ID = '4b14bcee621141b090bc8402f862dd42'
SPOTIFY_CLIENT_SECRET = '89398db9ea9a44908e25575085fbdcc9'
SPOTIFY_REDIRECT_URI = 'http://127.0.0.1:8888/callback'

# --- Paths ---
base_path = os.path.dirname(os.path.abspath(__file__))
csv_path = r"C:\xampp\htdocs\CulturaCharraLaravel\resources\views\IA\dataset\spotify_tracks.csv"
model_path = os.path.join(base_path, "..", "model")
model_file = os.path.join(model_path, "recommender.pkl")

# --- Crear carpeta del modelo si no existe ---
os.makedirs(model_path, exist_ok=True)

# --- Cargar dataset ---
df = pd.read_csv(csv_path)
required_cols = ['genre', 'danceability', 'energy', 'valence', 'tempo', 'uri', 'name', 'artist_name']
df = df.dropna(subset=required_cols)
features = ['danceability', 'energy', 'valence', 'tempo']
X = df[features]

# --- Cargar o entrenar modelo ---
if os.path.exists(model_file):
    model = joblib.load(model_file)
else:
    model = NearestNeighbors(n_neighbors=10, metric='cosine')
    model.fit(X)
    joblib.dump(model, model_file)

# --- Función de recomendación ---
def recomendar_playlist_por_genero(generos):
    df_genero = df[df['genre'].isin(generos)]

    if df_genero.empty:
        return {
            "error": f"No se encontraron canciones para los géneros: {', '.join(generos)}"
        }

    base = df_genero.sample(1)
    dist, indices = model.kneighbors(base[features])
    recomendadas = df_genero.iloc[indices[0]]

    canciones = []
    for _, row in recomendadas.iterrows():
        canciones.append({
            "name": row['name'],
            "artist": row['artist_name'],
            "uri": row['uri']
        })

    return {
        "base": {
            "name": base.iloc[0]['name'],
            "artist": base.iloc[0]['artist_name']
        },
        "canciones": canciones
    }

# --- Crear playlist en Spotify ---
def crear_playlist_en_spotify(nombre, track_uris):
    sp = spotipy.Spotify(auth_manager=SpotifyOAuth(
        client_id=SPOTIFY_CLIENT_ID,
        client_secret=SPOTIFY_CLIENT_SECRET,
        redirect_uri=SPOTIFY_REDIRECT_URI,
        scope="playlist-modify-public"
    ))

    user_id = sp.me()["id"]
    playlist = sp.user_playlist_create(user=user_id, name=nombre, public=True)
    sp.playlist_add_items(playlist_id=playlist['id'], items=track_uris)
    return playlist["external_urls"]["spotify"]

# --- Ejecución principal ---
if __name__ == "__main__":
    if len(sys.argv) < 2:
        print(json.dumps({"error": "Debe proporcionar al menos un género como argumento."}))
        sys.exit(1)

    genero_input = sys.argv[1]
    generos_elegidos = [genero_input.strip().lower()]

    resultado = recomendar_playlist_por_genero(generos_elegidos)

    if "error" in resultado:
        print(json.dumps(resultado, ensure_ascii=False))
        sys.exit(1)

    uris = [c["uri"] for c in resultado["canciones"]]
    url_playlist = crear_playlist_en_spotify("Playlist IA - ARMonica", uris)
    resultado["playlist_url"] = url_playlist

    print(json.dumps(resultado, ensure_ascii=False))
