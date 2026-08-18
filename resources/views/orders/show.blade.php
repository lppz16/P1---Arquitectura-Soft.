<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ahora usamos el título dinámico que definimos en el controlador -->
    <title>{{ $viewData['title'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black font-sans p-8 min-h-screen flex items-center justify-center">

    <div class="max-w-lg w-full mx-auto bg-gray-900 p-8 rounded-lg shadow-[0_0_20px_rgba(37,99,235,0.3)] border border-blue-900">
        
        <h1 class="text-2xl font-bold mb-6 text-white text-center">{{ __('Detalle de la Orden') }} <span class="text-blue-500">#{{ $viewData['order']->id }}</span></h1>

        <!-- Contenedor interno para los datos (Actividad 5) -->
        <div class="space-y-5 bg-gray-800 p-6 rounded-lg border border-blue-900/50">
            <div>
                <p class="text-xs text-blue-400 font-semibold tracking-wider uppercase mb-1">{{ __('Número de Orden') }}</p>
                <p class="text-lg text-gray-200">{{ $viewData['order']->orderNumber }}</p>
            </div>

            <div>
                <p class="text-xs text-blue-400 font-semibold tracking-wider uppercase mb-1">{{ __('Fecha de Creación') }}</p>
                <p class="text-lg text-gray-200">{{ $viewData['order']->creationDate }}</p>
            </div>

            <div>
                <p class="text-xs text-blue-400 font-semibold tracking-wider uppercase mb-1">{{ __('Monto Total') }}</p>
                <!-- Conservando el formato sin decimales -->
                <p class="text-lg text-gray-200">${{ number_format($viewData['order']->totalAmount, 0) }}</p>
            </div>

            <div>
                <p class="text-xs text-blue-400 font-semibold tracking-wider uppercase mb-1">{{ __('Estado') }}</p>
                <p class="text-lg text-gray-200">
                    <span class="inline-block px-3 py-1 bg-blue-900/40 text-blue-300 rounded-full text-sm font-medium border border-blue-800">
                        {{ __($viewData['order']->status) }}
                    </span>
                </p>
            </div>
        </div>

        <hr class="my-6 border-blue-900/50">

        <!-- Botones de navegación y acción -->
        <div class="flex justify-between items-center mt-2">
            
            <a href="{{ route('order.index') }}" class="text-gray-400 hover:text-blue-400 hover:underline transition duration-300">
                {{ __('Volver a la lista') }}
            </a>
            
            <!-- Botón para la Actividad 6 (Borrar objeto) -->
            <form action="{{ route('order.destroy', $viewData['order']->id) }}" method="POST" onsubmit="return confirm('{{ __('¿Estás seguro de que deseas eliminar esta orden?') }}');">
                
                @csrf
                @method('DELETE')
                
                <button type="submit" class="bg-red-700 text-white font-semibold px-5 py-2 rounded border border-red-800 hover:bg-red-600 hover:shadow-[0_0_15px_rgba(220,38,38,0.5)] transition duration-300">
                    {{ __('Eliminar Orden') }}
                </button>
                
            </form>

        </div>
        
    </div>

</body>
</html>