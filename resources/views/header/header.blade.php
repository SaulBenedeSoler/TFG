<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ url('public/imagenes/Logos/icon.png') }}">

    <nav class="navbar navbar-expand-lg bg-danger sticky-top">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <img src="{{ url('imagenes/Logos/LogoFinal.png') }}" class="logo" alt="Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle" id="week-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver Semanas</a>
                        <div class="dropdown-menu bg-danger" aria-labelledby="week-dropdown">
                            <a href="{{ route('Movies.mostrar', ['numeroSemana' => 1]) }}" class="dropdown-item text-white bg-danger">Semana 1</a>
                            <a href="{{ route('Movies.mostrar', ['numeroSemana' => 2]) }}" class="dropdown-item text-white bg-danger">Semana 2</a>
                            <a href="{{ route('Movies.mostrar', ['numeroSemana' => 3]) }}" class="dropdown-item text-white bg-danger">Semana 3</a>
                            <a href="{{ route('Movies.mostrar', ['numeroSemana' => 4]) }}" class="dropdown-item text-white bg-danger">Semana 4</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('promociones.show') }}" class="nav-link text-white">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('comida.index') }}" class="nav-link text-white">Packs de comida</a>
                    </li>
                </ul>
                
                <div class="collapse navbar-collapse" id="navbarS">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" id="week-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver Compras</a>
                            <div class="dropdown-menu bg-danger" aria-labelledby="week-dropdown">
                                  <a href="{{ route('menu.show')}}" class="dropdown-item text-white bg-danger">Ver Menus</a>
                                  <a href="{{ route('prom.show')}}" class="dropdown-item text-white bg-danger">Ver Promociones</a>
                                  <a href="{{route('entradas.ver')}}" class="dropdown-item text-white bg-danger">Ver Tickets</a>
                            </div>
                        </li>
                    </ul>
                </div>


                <ul class="navbar-nav ms-auto">
                    @if(Auth::check())
                        <li class="nav-item dropdown bg-danger">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end bg-danger" aria-labelledby="userMenu">
                                <li><a href="{{ route('profile.edit') }}" class="dropdown-item text-white">Ajustes</a></li>
                                <li>
                                    <a href="#" class="dropdown-item text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>
                                </li>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-white">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Registrarse</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</header>
