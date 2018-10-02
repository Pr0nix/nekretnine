<div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
                        
          <a href="/estates" class="navbar-brand d-flex align-items-center">
            <strong>Nekretnine</strong>
          </a>
          @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>