@extends('layouts.app')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-bold flex items-center gap-3">
                <span class="text-5xl">🏀</span> Equipos de la Liga
            </h1>
            <a href="{{ route('teams.create') }}" class="bg-blue-600 hover:bg-blue-700 px-8 py-4 rounded-2xl font-medium flex items-center gap-2">
                + Nuevo Equipo
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-500 text-white px-6 py-4 rounded-2xl mb-6">{{ session('success') }}</div>
        @endif

        <div class="bg-white/10 backdrop-blur-xl rounded-3xl overflow-hidden border border-white/10">
            <table class="min-w-full">
                <thead class="bg-white/5">
                    <tr>
                        <th class="px-8 py-6 text-left text-lg">Nombre</th>
                        <th class="px-8 py-6 text-left text-lg">Ciudad</th>
                        <th class="px-8 py-6 text-left text-lg">Entrenador</th>
                        <th class="px-8 py-6 text-center text-lg">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @forelse ($teams as $team)
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-8 py-6 font-semibold">{{ $team->name }}</td>
                        <td class="px-8 py-6">{{ $team->city }}</td>
                        <td class="px-8 py-6">{{ $team->coach ?? '—' }}</td>
                        <td class="px-8 py-6 text-center">
                            <a href="{{ route('teams.edit', $team) }}" class="text-blue-400 hover:text-blue-300 mr-6">Editar</a>
                            <form action="{{ route('teams.destroy', $team) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('¿Eliminar equipo?')" class="text-red-400 hover:text-red-300">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="px-8 py-20 text-center text-gray-400 text-lg">No hay equipos registrados aún</td></tr>
                    @endempty
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection