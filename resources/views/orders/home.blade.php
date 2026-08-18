<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - UrbanVibe Wear</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black flex items-center justify-center h-screen font-sans">

    <!-- Contenedor principal oscuro con borde y resplandor azul -->
    <div class="bg-gray-900 p-10 rounded-lg shadow-[0_0_20px_rgba(37,99,235,0.3)] border border-blue-900 text-center max-w-lg w-full mx-4">
        
        <!-- Mensaje de éxito adaptado a la nueva colorimetría -->
        @if (session('success'))
            <div class="bg-blue-900 border border-blue-500 text-blue-100 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Nuevo mensaje de bienvenida -->
        <h2 class="text-blue-500 text-sm font-bold tracking-widest uppercase mb-2">Bienvenido a UrbanVibe Wear</h2>
        
        <h1 class="text-3xl font-bold mb-4 text-white">Gestión de Órdenes</h1>
        <p class="mb-8 text-gray-400">Seleccione una acción para continuar</p>
        
        <!-- Botones con estilo tecnológico -->
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('order.create') }}" class="inline-block bg-blue-600 text-white font-semibold px-5 py-3 rounded hover:bg-blue-500 hover:shadow-[0_0_15px_rgba(59,130,246,0.6)] transition duration-300">
                Crear Orden (Actividad 2)
            </a>
            
            <a href="{{ route('order.index') }}" class="inline-block bg-transparent border-2 border-blue-600 text-blue-400 font-semibold px-5 py-3 rounded hover:bg-blue-600 hover:text-white hover:shadow-[0_0_15px_rgba(59,130,246,0.6)] transition duration-300">
                Listar Órdenes (Actividad 4)
            </a>
        </div>
        
    </div>

</body>
</html>