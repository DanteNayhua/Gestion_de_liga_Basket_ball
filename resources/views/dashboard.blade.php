@extends('layouts.app')

@section('content')
<div class="py-10">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-4xl font-bold mb-2">🏀 Dashboard - Liga de Básquetbol</h1>
        <p class="text-gray-600 mb-8">Bienvenido, {{ auth()->user()->name ?? 'Usuario' }}</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="{{ route('teams.index') }}" class="block bg-white p-8 rounded-2xl shadow hover:shadow-xl text-center">
                <div class="text-6xl mb-4">🏀</div>
                <h3 class="text-2xl font-semibold">Equipos</h3>
            </a>
            <a href="{{ route('players.index') }}" class="block bg-white p-8 rounded-2xl shadow hover:shadow-xl text-center">
                <div class="text-6xl mb-4">👟</div>
                <h3 class="text-2xl font-semibold">Jugadores</h3>
            </a>
            <a href="{{ route('games.index') }}" class="block bg-white p-8 rounded-2xl shadow hover:shadow-xl text-center">
                <div class="text-6xl mb-4">🏆</div>
                <h3 class="text-2xl font-semibold">Partidos</h3>
            </a>
        </div>

        <div class="mt-12 flex justify-center gap-4">
            <a href="{{ route('teams.index') }}" class="bg-indigo-600 text-white px-8 py-4 rounded-xl text-lg font-medium hover:bg-indigo-700">
                Ir a Equipos
            </a>
            <a href="{{ route('players.index') }}" class="bg-green-600 text-white px-8 py-4 rounded-xl text-lg font-medium hover:bg-green-700">
                Ir a Jugadores
            </a>
            <a href="{{ route('games.index') }}" class="bg-purple-600 text-white px-8 py-4 rounded-xl text-lg font-medium hover:bg-purple-700">
                Ir a Partidos
            </a>
        </div>
    </div>
</div>
@endsection