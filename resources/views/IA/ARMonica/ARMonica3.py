import pandas as pd
import torch
import torch.nn as nn
import torch.nn.functional as F
from torch.utils.data import DataLoader, TensorDataset
from sklearn.preprocessing import LabelEncoder, StandardScaler
from sklearn.metrics.pairwise import euclidean_distances
import numpy as np

# -------------------------------
# 1. Cargar y procesar el CSV
# -------------------------------

df = pd.read_csv("C:\\xampp\\htdocs\\CulturaCharraLaravel\\resources\\views\\IA\\dataset\\spotify_tracks.csv")  # asegúrate que este archivo esté en la misma carpeta

# Características numéricas
X = df[['danceability', 'energy', 'valence', 'tempo']]

# Codificar géneros
label_encoder = LabelEncoder()
y = label_encoder.fit_transform(df['genre'])

# Normalizar los datos
scaler = StandardScaler()
X_scaled = scaler.fit_transform(X)

# Tensores
X_tensor = torch.tensor(X_scaled, dtype=torch.float32)
y_tensor = torch.tensor(y, dtype=torch.long)

# Dataset y Dataloader
dataset = TensorDataset(X_tensor, y_tensor)
loader = DataLoader(dataset, batch_size=2, shuffle=True)

# -------------------------------
# 2. Definir el modelo
# -------------------------------

class GenreClassifier(nn.Module):
    def __init__(self):
        super(GenreClassifier, self).__init__()
        self.fc1 = nn.Linear(4, 16)
        self.fc2 = nn.Linear(16, 8)
        self.output = nn.Linear(8, len(set(y)))  # salidas según géneros únicos

    def forward(self, x):
        x = F.relu(self.fc1(x))
        x = F.relu(self.fc2(x))
        return self.output(x)

model = GenreClassifier()

# -------------------------------
# 3. Entrenamiento
# -------------------------------

criterion = nn.CrossEntropyLoss()
optimizer = torch.optim.Adam(model.parameters(), lr=0.01)

epochs = 100
for epoch in range(epochs):
    for X_batch, y_batch in loader:
        y_pred = model(X_batch)
        loss = criterion(y_pred, y_batch)

        optimizer.zero_grad()
        loss.backward()
        optimizer.step()
    
    if (epoch + 1) % 10 == 0:
        print(f"Epoch {epoch+1} - Loss: {loss.item():.4f}")

# -------------------------------
# 4. Guardar el modelo entrenado
# -------------------------------

torch.save(model.state_dict(), 'modelo_genero_canciones.pt')
print("\n✅ Modelo guardado como 'modelo_genero_canciones.pt'\n")

# -------------------------------
# 5. Cargar el modelo para predecir
# -------------------------------

modelo_cargado = GenreClassifier()
modelo_cargado.load_state_dict(torch.load('modelo_genero_canciones.pt'))
modelo_cargado.eval()
print("✅ Modelo cargado correctamente.")


# -------------------------------
# 6. Probar predicción individual
# -------------------------------

# Crear DataFrame con nombres de columnas (evita el warning de sklearn)
nueva_cancion = pd.DataFrame([[0.6, 0.8, 0.7, 120]], columns=['danceability', 'energy', 'valence', 'tempo'])
entrada = scaler.transform(nueva_cancion)
entrada_tensor = torch.tensor(entrada, dtype=torch.float32)

with torch.no_grad():
    salida = modelo_cargado(entrada_tensor)
    prediccion = torch.argmax(salida).item()
    genero_predicho = label_encoder.inverse_transform([prediccion])[0]

print(f"\n🎧 Género predicho para la nueva canción: {genero_predicho}\n")


# -------------------------------
# 7. Generar playlist similar a "Believer"
# -------------------------------

referencia = df[df['name'] == "Believer"][['danceability', 'energy', 'valence', 'tempo']]
referencia_scaled = scaler.transform(referencia)
distancias = euclidean_distances(X_scaled, referencia_scaled)
df['distancia'] = distancias

playlist_similar = df.sort_values('distancia').head(3)
print("🎵 Playlist similar a 'Believer':\n")
print(playlist_similar[['name', 'artist_name', 'genre']])
