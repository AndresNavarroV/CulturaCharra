import spotipy
from spotipy.oauth2 import SpotifyOAuth
import pandas as pd
import re

# 🔑 Tus credenciales de Spotify
client_id = 'e35bfbc17b164b488e3a240a0f67c4f2'
client_secret = '7cca7585bfe9417a8a0aab445f1526d9'
redirect_uri='http://127.0.0.1:8888/callback'

# ✅ Autenticación usando OAuth (abre navegador la primera vez)
sp = spotipy.Spotify(auth_manager=SpotifyOAuth(
    client_id=client_id,
    client_secret=client_secret,
    redirect_uri=redirect_uri,
    scope='user-read-private'
))

# Función para extraer el ID desde el enlace
def extraer_track_id(url):
    match = re.search(r'track/([a-zA-Z0-9]+)', url)
    if match:
        return match.group(1)
    return None

# Leer enlaces desde archivo
with open("C:/xampp/htdocs/CulturaCharraLaravel/resources/views/IA/dataset/links_spotify.txt", "r", encoding="utf-8") as f:
    urls = [line.strip() for line in f.readlines() if line.strip()]

datos = []

for url in urls:
    track_id = extraer_track_id(url)
    if not track_id:
        print(f"❌ ID no válido en: {url}")
        continue

    try:
        track = sp.track(track_id)
        name = track['name']
        artist_name = track['artists'][0]['name']
        artist_id = track['artists'][0]['id']

        # Obtener el género desde el artista
        artist_info = sp.artist(artist_id)
        genres = artist_info.get('genres', [])
        genre = genres[0] if genres else "unknown"

        # Obtener características de audio (usando solo ID)
        features = sp.audio_features([track_id])[0]
        if features:
            datos.append([
                name,
                artist_name,
                genre,
                f"spotify:track:{track_id}",
                round(features['danceability'], 2),
                round(features['energy'], 2),
                round(features['valence'], 2),
                round(features['tempo'], 3)
            ])
            print(f"✅ Procesado: {name} - {artist_name}")
        else:
            print(f"⚠️ Sin características para: {track_id}")
    except Exception as e:
        print(f"❌ Error al procesar {url}: {e}")

# Guardar archivo
with open("canciones_info.txt", "w", encoding="utf-8") as f:
    f.write("name,artist_name,genre,uri,danceability,energy,valence,tempo\n")
    for fila in datos:
        f.write(",".join(map(str, fila)) + "\n")

print("\n🎉 ¡Archivo 'canciones_info.txt' generado con éxito!")
