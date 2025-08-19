<x-app-layout>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Jetstream</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .card {
                transition: transform 0.3s ease-in-out;
            }
            .card:hover {
                transform: scale(1.05);
            }
        </style>
    </head>
    <body class="bg-gray-100">
        <!-- Contenedor principal con margen superior (mt-32) y centrado -->
        <div class="w-full mx-auto flex flex-col items-center space-y-6 mt-16 mb-16 px-4">

            <!-- Tarjeta Mariachis -->
            <a href="{{ route('eventos.index') }}" class="w-2/3 cursor-pointer group transition-all">
                <div class="card bg-red-500 text-white p-6 rounded-lg shadow-md text-center h-48 flex flex-col items-center justify-center hover:bg-red-600 transition-all duration-300 group-hover:shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Mariachis</h2>
                    <p class="text-gray-100">Crear, gestionar, editar o borrar mis eventos</p>
                    <div class="mt-3 opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </a>
        
            <!-- Tarjeta Ingenieros de Sonido -->
            <a href="{{ route('sonido.index') }}" class="w-2/3 cursor-pointer group transition-all">
                <div class="card bg-blue-500 text-white p-6 rounded-lg shadow-md text-center h-48 flex flex-col items-center justify-center hover:bg-blue-600 transition-all duration-300 group-hover:shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Ingenieros de Sonido</h2>
                    <p class="text-gray-100">Crear, gestionar, editar o borrar mi inventario y gestionar eventos</p>
                    <div class="mt-3 opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </a>
        
            <!-- Tarjeta Administradores -->
            <a href="{{ route('sistema.index') }}" class="w-2/3 cursor-pointer group transition-all">
                <div class="card bg-green-500 text-white p-6 rounded-lg shadow-md text-center h-48 flex flex-col items-center justify-center hover:bg-green-600 transition-all duration-300 group-hover:shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Administradores</h2>
                    <p class="text-gray-100">Gestión de roles y permisos</p>
                    <div class="mt-3 opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </a>
        
        </div>
    </body>
    </html>
</x-app-layout>