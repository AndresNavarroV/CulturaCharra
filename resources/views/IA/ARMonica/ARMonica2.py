import pandas as pd
import numpy as np
from sklearn.preprocessing import StandardScaler
from sklearn.metrics.pairwise import euclidean_distances
import torch
from torch import nn
import torch.nn.functional as F
import matplotlib.pyplot as plt
import os

# --- Cargar y preparar datos ---
DATASET_PATH = r"C:\\xampp\\htdocs\\CulturaCharraLaravel\\resources\\views\\IA\\dataset\\spotify_tracks.csv"
features = ['danceability', 'energy', 'valence', 'tempo']

df = pd.read_csv(DATASET_PATH)
df = df.dropna(subset=features)

scaler = StandardScaler()
X_scaled = scaler.fit_transform(df[features])
X_tensor = torch.tensor(X_scaled, dtype=torch.float)

# --- Definir VAE ---
input_dim = X_scaled.shape[1]
latent_dim = 2

class VAE(nn.Module):
    def __init__(self):
        super(VAE, self).__init__()
        self.fc1 = nn.Linear(input_dim, 16)
        self.fc21 = nn.Linear(16, latent_dim)
        self.fc22 = nn.Linear(16, latent_dim)
        self.fc3 = nn.Linear(latent_dim, 16)
        self.fc4 = nn.Linear(16, input_dim)

    def encode(self, x):
        h1 = F.relu(self.fc1(x))
        return self.fc21(h1), self.fc22(h1)

    def reparameterize(self, mu, logvar):
        std = torch.exp(0.5 * logvar)
        eps = torch.randn_like(std)
        return mu + eps * std

    def decode(self, z):
        h3 = F.relu(self.fc3(z))
        return self.fc4(h3)

    def forward(self, x):
        mu, logvar = self.encode(x)
        z = self.reparameterize(mu, logvar)
        return self.decode(z), mu, logvar

# --- Función de pérdida ---
def loss_function(recon_x, x, mu, logvar):
    BCE = F.mse_loss(recon_x, x, reduction='sum')
    KLD = -0.5 * torch.sum(1 + logvar - mu.pow(2) - logvar.exp())
    return BCE + KLD

# --- Entrenamiento ---
vae = VAE()
optimizer = torch.optim.Adam(vae.parameters(), lr=1e-3)

print("Entrenando modelo VAE...")
for epoch in range(1000):
    vae.train()
    optimizer.zero_grad()
    recon_batch, mu, logvar = vae(X_tensor)
    loss = loss_function(recon_batch, X_tensor, mu, logvar)
    loss.backward()
    optimizer.step()
    if epoch % 100 == 0:
        print(f"Epoch {epoch}, Loss: {loss.item():.2f}")

# --- Extraer información original con nombres, artistas y géneros ---
df_info = df[['name', 'artist_name', 'genre']].reset_index(drop=True)
mu_real, _ = vae.encode(X_tensor)
mu_real_np = mu_real.detach().numpy()

# --- Generar canciones artificiales y obtener z ---
def generar_canciones_artificiales_con_info(n=10):
    vae.eval()
    with torch.no_grad():
        z = torch.randn(n, latent_dim)
        samples = vae.decode(z).numpy()
        generated = scaler.inverse_transform(samples)

        # Buscar canciones reales más cercanas en espacio latente
        nombres, artistas, generos = [], [], []
        distances = euclidean_distances(z, mu_real_np)

        for i in range(n):
            idx = np.argmin(distances[i])
            nombres.append(df_info.loc[idx, 'name'])
            artistas.append(df_info.loc[idx, 'artist_name'])
            generos.append(df_info.loc[idx, 'genre'])

        df_gen = pd.DataFrame(generated, columns=features)
        df_gen['name'] = nombres
        df_gen['artist_name'] = artistas
        df_gen['genre'] = generos
        df_gen['uri'] = ''
        return df_gen

# --- Ejecutar generación y guardar ---
canciones_ia = generar_canciones_artificiales_con_info(100)
output_path = os.path.join(os.path.dirname(DATASET_PATH), 'canciones_ia_generadas.csv')
canciones_ia.to_csv(output_path, index=False)

print("✅ Canciones generadas con nombres reales guardadas en:", output_path)


mu, _ = vae.encode(X_tensor)
mu_np = mu.detach().numpy()
plt.scatter(mu_np[:, 0], mu_np[:, 1], alpha=0.5)
plt.title("Distribución en el espacio latente")
plt.xlabel("Z1")
plt.ylabel("Z2")
plt.show()
