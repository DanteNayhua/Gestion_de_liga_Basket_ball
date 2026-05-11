<nav class="navbar bg-gradient-to-r from-[#1e3a8a] to-[#ff6600] text-white shadow-2xl">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">
            <!-- Logo NBA style -->
            <div class="flex items-center gap-3">
                <span class="text-4xl">🏀</span>
                <h1 class="text-3xl font-bold tracking-tighter">Liga de Básquetbol</h1>
            </div>

            <!-- Menú -->
            <div class="flex items-center gap-10 text-lg font-medium">
                <a href="{{ route('teams.index') }}" class="hover:text-white/80 flex items-center gap-2 transition">
                    <i class="fas fa-users"></i> Equipos
                </a>
                <a href="{{ route('players.index') }}" class="hover:text-white/80 flex items-center gap-2 transition">
                    <i class="fas fa-user"></i> Jugadores
                </a>
                <a href="{{ route('games.index') }}" class="hover:text-white/80 flex items-center gap-2 transition">
                    <i class="fas fa-trophy"></i> Partidos
                </a>
            </div>

            <!-- Usuario + Logout -->
            <div class="flex items-center gap-4">
                <span class="text-sm">Hola, {{ auth()->user()->name ?? 'Usuario' }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                            class="bg-white text-[#1e3a8a] px-6 py-2 rounded-2xl font-medium hover:bg-orange-100 transition">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>