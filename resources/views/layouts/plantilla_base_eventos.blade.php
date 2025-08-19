<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      .container-bg {
        position: relative;
        background-image: url('/images/slider/big1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh; /* ocupa toda la altura visible */
        padding: 30px;
        z-index: 0;
      }

      .container-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.5); /* overlay oscuro */
        z-index: 1;
      }

      .container-bg > * {
        position: relative;
        z-index: 2;
        color: white;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light px-3 d-flex justify-content-between align-items-center">
      <!-- Logo -->
      <div class="d-flex align-items-center">
        <img src="/ruta/al/logo.png" alt="Logo" width="50" height="50" class="me-2">
      </div>

      <!-- Botones -->
      <div class="d-flex">
        <a href="/dashboard" class="btn btn-outline-primary me-2">Regresar</a>
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
          @csrf
          <button type="submit" class="btn btn-link" style="border:none; background:none; padding:0; cursor:pointer;">
              Cerrar sesión
          </button>
        </form>
      </div>
    </nav>

    <!-- Título -->
    <h1 class="bg-danger text-white text-center py-3">Inventario</h1>

    <!-- Contenido con imagen de fondo -->
    <div class="container container-bg">
        @yield('contenido')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

