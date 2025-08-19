<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IA Recomendadora de Canciones</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
  <!-- Encabezado -->
  <header class="bg-green-600 text-white p-6 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold">🎵 Recomendador Musical IA</h1>
      <nav>
        <a href="#" class="mx-2 hover:underline">Inicio</a>
        <a href="#" class="mx-2 hover:underline">Cómo Funciona</a>
        <a href="#" class="mx-2 hover:underline">Contacto</a>
      </nav>
    </div>
  </header>

  <!-- Sección principal -->
  <main class="container mx-auto p-6">
    <section class="text-center mb-10">
      <h2 class="text-3xl font-semibold mb-4">Descubre nuevas canciones con IA</h2>
      <p class="text-lg text-gray-600 mb-6">Ingresa tu estado de ánimo o género musical y deja que la IA cree una playlist para ti.</p>

      <!-- Formulario -->
      <form action="{{ route('IA.ARMonica.generar') }}" method="POST" class="flex flex-col sm:flex-row justify-center gap-4">
        @csrf
        <input name="genero" type="text" placeholder="Escribe un género musical (ej. pop, rock)" class="w-full sm:w-96 p-3 rounded-md border border-gray-300" required>
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md transition">Generar Playlist</button>
      </form>
    </section>

    <!-- Mostrar link generado -->
    @if(session('playlist_url'))
      <section class="bg-white p-6 rounded-lg shadow-md max-w-xl mx-auto text-center">
        <h3 class="text-xl font-bold mb-4">🎧 ¡Tu playlist está lista!</h3>
        <a href="{{ session('playlist_url') }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition inline-block">
          Escuchar en Spotify
        </a>
      </section>
    @endif

    <!-- Mostrar error si hubo -->
    @if(session('error'))
      <section class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative max-w-xl mx-auto mb-4">
        <strong class="font-bold">Error:</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
      </section>
    @endif
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center p-4 mt-10">
    © 2025 Recomendador Musical IA. Hecho con ❤️
  </footer>
</body>
</html>
