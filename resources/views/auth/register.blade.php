@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-4 bg-white/10 backdrop-blur-2xl border border-white/20 rounded-3xl p-10 shadow-2xl">
        <div class="text-center mb-10">
            <div class="text-8xl mb-4">🏀</div>
            <h1 class="text-5xl font-bold tracking-tighter">Liga de Básquetbol</h1>
            <p class="text-orange-400 mt-3">Crea tu cuenta de administrador</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="space-y-6">
                <input type="text" name="name" placeholder="Nombre completo" class="w-full px-6 py-4 bg-white/10 border border-white/30 rounded-2xl text-white placeholder:text-white/60 focus:border-orange-400 focus:outline-none" required>
                <input type="email" name="email" placeholder="Correo electrónico" class="w-full px-6 py-4 bg-white/10 border border-white/30 rounded-2xl text-white placeholder:text-white/60 focus:border-orange-400 focus:outline-none" required>
                <input type="password" name="password" placeholder="Contraseña" class="w-full px-6 py-4 bg-white/10 border border-white/30 rounded-2xl text-white placeholder:text-white/60 focus:border-orange-400 focus:outline-none" required>
                <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" class="w-full px-6 py-4 bg-white/10 border border-white/30 rounded-2xl text-white placeholder:text-white/60 focus:border-orange-400 focus:outline-none" required>
                <button type="submit" class="w-full py-4 bg-orange-500 hover:bg-orange-600 text-white font-bold text-xl rounded-2xl transition">
                    Crear cuenta
                </button>
            </div>
        </form>

        <p class="text-center mt-8 text-white/70">
            ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-orange-400 hover:text-orange-300">Inicia sesión</a>
        </p>
    </div>
</div>
@endsection