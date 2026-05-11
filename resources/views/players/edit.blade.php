<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jugador - Liga de Básquetbol</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg">
            <div class="px-8 py-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-8">👟 Editar Jugador</h1>

                <form action="{{ route('players.update', $player) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nombre Completo</label>
                        <input type="text" name="name" 
                               value="{{ old('name', $player->name) }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500"
                               required>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2"># Camiseta</label>
                            <input type="text" name="jersey_number" 
                                   value="{{ old('jersey_number', $player->jersey_number) }}"
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500"
                                   required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Posición</label>
                            <input type="text" name="position" 
                                   value="{{ old('position', $player->position) }}"
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500"
                                   required>
                        </div>
                    </div>

                    <div class="mb-6 mt-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Equipo</label>
                        <select name="team_id" 
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500"
                                required>
                            <option value="">Selecciona un equipo...</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}" {{ $team->id == $player->team_id ? 'selected' : '' }}>
                                    {{ $team->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ route('players.index') }}" 
                           class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg font-medium">
                            Cancelar
                        </a>
                        <button type="submit" 
                                class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium">
                            Actualizar Jugador
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>