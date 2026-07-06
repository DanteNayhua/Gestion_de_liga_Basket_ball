<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Partido - Liga de Básquetbol</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg">
            <div class="px-8 py-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-8">⚔️ Nuevo Partido</h1>

                <form action="{{ route('games.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-2 gap-6">
                        <!-- Equipo Local -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Equipo Local</label>
                            <select name="home_team_id" class="w-full border border-gray-300 rounded-lg px-4 py-3" required>
                                <option value="">Selecciona equipo local...</option>
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}" @selected(old('home_team_id') == $team->id)>
                                        {{ $team->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Equipo Visitante -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Equipo Visitante</label>
                            <select name="away_team_id" class="w-full border border-gray-300 rounded-lg px-4 py-3" required>
                                <option value="">Selecciona equipo visitante...</option>
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}" @selected(old('away_team_id') == $team->id)>
                                        {{ $team->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Fecha y Hora del Partido -->
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Fecha y Hora del Partido</label>
                        <input type="datetime-local" name="match_date" 
                               value="{{ old('match_date') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-3" required>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="flex gap-4 mt-10">
                        <a href="{{ route('games.index') }}" 
                           class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg font-medium">
                            Cancelar
                        </a>
                        <button type="submit" 
                                class="px-8 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-lg font-medium">
                            Crear Partido
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>