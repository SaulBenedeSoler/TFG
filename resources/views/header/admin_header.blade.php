<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/css.css"> 

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

                </ul>
            </div>

            <div class="dropdown d-flex justify-content-end align-items-center">
                @if(Auth::check())
                <button class="btn btn-danger dropdown-toggle nomb" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ auth()->user()->name }}
                </button>
            
                <div class="dropdown-menu dropdown-menu-end bg-danger" aria-labelledby="dropdownMenu2">
                    <a href="{{ route('profile.edit') }}" class="dropdown-item text-light">Ajustes</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item text-light">Cerrar sesión</a>
                    
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
                @endif
            </div>
            
            
            
            

            
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</header>
