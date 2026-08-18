<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Orden - UrbanVibe Wear</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black font-sans p-8 min-h-screen flex items-center justify-center">

    <div class="max-w-lg w-full mx-auto bg-gray-900 p-8 rounded-lg shadow-[0_0_20px_rgba(37,99,235,0.3)] border border-blue-900">
        
        <h1 class="text-2xl font-bold mb-6 text-white text-center">Detalle de la Orden <span class="text-blue-500">#{{ $order->id }}</span></h1>

        <!-- Contenedor interno para los datos (Actividad 5) -->
        <div class="space-y-5 bg-gray-800 p-6 rounded-lg border border-blue-900/50">
            <div>
                <p class="text-xs text-blue-400 font-semibold tracking-wider uppercase mb-1">Número de Orden</p>
                <p class="text-lg text-gray-200">{{ $order->orderNumber }}</p>
            </div>

            <div>
                <p class="text-xs text-blue-400 font-semibold tracking-wider uppercase mb-1">Fecha de Creación</p>
                <p class="text-lg text-gray-200">{{ $order->creationDate }}</p>
            </div>

            <div>
                <p class="text-xs text-blue-400 font-semibold tracking-wider uppercase mb-1">Monto Total</p>
                <p class="text-lg text-gray-200">${{ number_format($order->totalAmount, 2) }}</p>
            </div>

            <div>
                <p class="text-xs text-blue-400 font-semibold tracking-wider uppercase mb-1">Estado</p>
                <p class="text-lg text-gray-200">
                    <span class="inline-block px-3 py-1 bg-blue-900/40 text-blue-300 rounded-full text-sm font-medium border border-blue-800">
                        {{ $order->status }}
                    </span>
                </p>
            </div>
        </div>

        <hr class="my-6 border-blue-900/50">

        <!-- Botones de navegación y acción -->
        <div class="flex justify-between items-center mt-2">
            
            <a href="{{ route('order.index') }}" class="text-gray-400 hover:text-blue-400 hover:underline transition duration-300">
                Volver a la lista
            </a>
            
            <!-- Botón para la Actividad 6 (Borrar objeto) -->
            <form action="{{ route('order.destroy', $order->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta orden?');">
                
                @csrf
                @method('DELETE')
                
                <button type="submit" class="bg-red-700 text-white font-semibold px-5 py-2 rounded border border-red-800 hover:bg-red-600 hover:shadow-[0_0_15px_rgba(220,38,38,0.5)] transition duration-300">
                    Eliminar Orden
                </button>
                
            </form>

        </div>
        
    </div>

</body>
</html>