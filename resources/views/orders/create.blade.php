<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Orden - UrbanVibe Wear</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black font-sans p-8 min-h-screen flex items-center justify-center">

    <div class="max-w-md w-full mx-auto bg-gray-900 p-8 rounded-lg shadow-[0_0_20px_rgba(37,99,235,0.3)] border border-blue-900">
        
        <h1 class="text-2xl font-bold mb-6 text-white text-center">Crear Nueva Orden</h1>

        <form action="{{ route('order.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="orderNumber" class="block text-blue-400 font-semibold mb-2">Número de Orden:</label>
                <input type="text" id="orderNumber" name="orderNumber" required
                       class="w-full bg-gray-800 border border-blue-900 text-white px-3 py-2 rounded focus:outline-none focus:border-blue-500 focus:shadow-[0_0_10px_rgba(37,99,235,0.5)] transition">
            </div>

            <div class="mb-4">
                <label for="creationDate" class="block text-blue-400 font-semibold mb-2">Fecha de Creación:</label>
                <!-- Usamos [color-scheme:dark] para que el calendario nativo se vea en modo oscuro -->
                <input type="date" id="creationDate" name="creationDate" required
                       class="w-full bg-gray-800 border border-blue-900 text-white px-3 py-2 rounded focus:outline-none focus:border-blue-500 focus:shadow-[0_0_10px_rgba(37,99,235,0.5)] transition [color-scheme:dark]">
            </div>

            <div class="mb-4">
                <label for="totalAmount" class="block text-blue-400 font-semibold mb-2">Monto Total:</label>
                <input type="number" min="0" id="totalAmount" name="totalAmount" required
                       class="w-full bg-gray-800 border border-blue-900 text-white px-3 py-2 rounded focus:outline-none focus:border-blue-500 focus:shadow-[0_0_10px_rgba(37,99,235,0.5)] transition">
            </div>

            <div class="mb-6">
                <label for="status" class="block text-blue-400 font-semibold mb-2">Estado:</label>
                <select id="status" name="status" required
                        class="w-full bg-gray-800 border border-blue-900 text-white px-3 py-2 rounded focus:outline-none focus:border-blue-500 focus:shadow-[0_0_10px_rgba(37,99,235,0.5)] transition">
                    <option value="Pendiente">Pendiente</option>
                    <option value="Pagada">Pagada</option>
                    <option value="Cancelada">Cancelada</option>
                </select>
            </div>

            <div class="flex justify-between items-center mt-8">
                <a href="{{ route('order.home') }}" class="text-gray-400 hover:text-blue-400 hover:underline transition">Volver</a>
                <button type="submit" class="bg-blue-600 text-white font-semibold px-5 py-2 rounded hover:bg-blue-500 hover:shadow-[0_0_15px_rgba(59,130,246,0.6)] transition duration-300">
                    Guardar Orden
                </button>
            </div>

        </form>
        
    </div>

</body>
</html>