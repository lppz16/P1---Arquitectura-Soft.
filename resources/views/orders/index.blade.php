<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Listar Órdenes - UrbanVibe Wear') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black font-sans p-8 min-h-screen flex items-center justify-center">

    <div class="max-w-2xl w-full mx-auto bg-gray-900 p-8 rounded-lg shadow-[0_0_20px_rgba(37,99,235,0.3)] border border-blue-900">
        
        <h1 class="text-2xl font-bold mb-6 text-white text-center">{{ __('Listado de Órdenes') }}</h1>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-blue-900/40">
                        <th class="border-b-2 border-blue-800 px-8 py-3 text-left text-blue-300 font-semibold rounded-tl-lg">{{ __('ID') }}</th>
                        <th class="border-b-2 border-blue-800 px-8 py-3 text-right text-blue-300 font-semibold rounded-tr-lg">{{ __('Número de Orden') }}</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($viewData['orders'] as $order)
                        <tr class="hover:bg-gray-800 transition duration-200">
                            <td class="border-b border-blue-900/50 px-8 py-3 text-left">
                                <a href="{{ route('order.show', $order->id) }}" class="text-blue-500 hover:text-blue-300 hover:underline font-bold transition">
                                    #{{ $order->id }}
                                </a>
                            </td>
                            <td class="border-b border-blue-900/50 px-8 py-3 text-right text-gray-300">
                                {{ $order->orderNumber }}
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('order.home') }}" class="inline-block bg-transparent border-2 border-blue-600 text-blue-400 font-semibold px-5 py-2 rounded hover:bg-blue-600 hover:text-white hover:shadow-[0_0_15px_rgba(59,130,246,0.6)] transition duration-300">
                {{ __('Volver al Inicio') }}
            </a>
        </div>
        
    </div>

</body>
</html>