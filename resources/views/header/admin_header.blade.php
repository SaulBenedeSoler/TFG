<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css.css') }}">
    <nav class="navbar navbar-expand-lg bg-danger sticky-top">
        <div class="container-fluid">
            <a href="{{ route('admin.index') }}" class="navbar-brand">
                <img src="{{ url('imagenes/Logos/LogoFinal.png') }}" class="Logo" style="max-height: 50px;" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('admin.movies.show') }}" class="nav-link text-white">Acciones Películas</a>
                    </li>
                    <li>
                        <a href="{{ route('usuarios.mostrar') }}" class="nav-link text-white">Acciones Usuarios</a>
                    </li>
                    <li>
                        <a href="{{ route('comida.adminComshow') }}" class="nav-link text-white">Acciones Menu</a>
                    </li>
                    
                    <li>
                        <a href="{{ route('promociones.adminshow') }}" class="nav-link text-white">Acciones Promociones</a>
                    </li>

                    <li><a href="{{ route('movies.create') }}"  class="nav-link text-white">Añadir Películas</a></li>

                    <li>
                        <a href="{{ route('comida.add') }}" class="nav-link text-white">Añadir Comida</a>
                    </li>

                    <li>
                        <a href="{{ route('promociones.add') }}" class="nav-link text-white">Añadir Promociones</a>
                    </li>

                    <li>
                        <a href="{{ route('admin.add') }}" class="nav-link text-white">Añadir Usuario</a>
                    </li>

                </ul>

                <div class="navbar-right">
                    @if(Auth::check())
                        <div class="dropdown">
                            <button class="usuario">{{ auth()->user()->name }}</button>
                            <div class="dropdown-content user-dropdown bg-danger">
                                <a href="{{ route('profile.edit') }}" class="dropdown-item">Ajustes</a>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>
                                
                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                                
                            </div>  
                            @endif              
                        </div>
            </div>
        </header>