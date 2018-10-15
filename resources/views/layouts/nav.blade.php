<nav class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
                    
        <a href="/estates" class="navbar-brand d-flex align-items-center">
        <strong>Nekretnine</strong>
        </a>
        @if (Route::has('login'))
            <div class="d-flex top-right links ml-auto">
                @auth
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                    <a href="{{ url('/logout') }}" class="nav-link">Logout</a>
                    <a href="#" class="nav-link">{{ ucfirst(Auth::user()->name) }}</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                @endauth
            </div>
        @endif
    </div>
</nav>