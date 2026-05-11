<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Equipo - Liga de Básquetbol</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg">
            <div class="px-8 py-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-8">🏀 Nuevo Equipo</h1>

                <form action="{{ route('teams.store') }}" method="POST">
                    @csrf

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nombre del Equipo</label>
                        <input type="text" name="name" 
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500"
                               required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ciudad</label>
                        <input type="text" name="city" 
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500"
                               required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Entrenador (opcional)</label>
                        <input type="text" name="coach" 
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500">
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ route('teams.index') }}" 
                           class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg font-medium">
                            Cancelar
                        </a>
                        <button type="submit" 
                                class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium">
                            Crear Equipo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>