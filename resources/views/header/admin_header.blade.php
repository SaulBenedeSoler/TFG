<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css.css') }}">
   <link rel="shortcut icon" type="image/png" href="{{ url('public/imagenes/Logos/icon.png') }}">
    <nav class="navbar navbar-expand-lg bg-danger sticky-top">
        <div class="container-fluid">
            <a href="{{ route('admin.index') }}" class="navbar-brand">
                <img src="{{ url('imagenes/Logos/LogoFinal.png') }}" class="logo" alt="Logo">
            </a>
            

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <!--ACCIONES PELÍCULAS-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle" id="week-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Películas</a>
                        <div class="dropdown-menu bg-danger" aria-labelledby="week-dropdown">
                            <a href="{{ route('admin.moviesShow') }}" class="nav-link text-white bg-danger">Ver Películas</a>
                            <a href="{{ route('movies.create') }}"  class="nav-link text-white bg-danger">Añadir Películas</a>
                        </div>
                    </li>

                    <!--ACCIONES USUARIOS--->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" id="week-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                            <div class="dropdown-menu bg-danger" aria-labelledby="week-dropdown">
                                <a href="{{ route('usuarios.mostrar') }}" class="nav-link text-white bg-danger">Ver usuarios</a>
                                <a href="{{ route('admin.add') }}"  class="nav-link text-white bg-danger">Añadir usuarios</a>
                            </div>
                        </li>
                    </ul>

                    <!--ACCIONES PROMOCIONES-->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" id="week-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Promociones</a>
                            <div class="dropdown-menu bg-danger" aria-labelledby="week-dropdown">
                                <a href="{{ route('promociones.adminshow') }}"  class="nav-link text-white bg-danger">Ver promociones</a>
                                <a href="{{ route('promociones.add') }}"  class="nav-link text-white bg-danger">Añadir promociones</a>
                            </div>
                        </li>
                    </ul>


         
                    <!--ACCIONES MENUS-->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" id="week-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menus</a>
                            <div class="dropdown-menu bg-danger" aria-labelledby="week-dropdown">
                                <a href="{{ route('comida.adminComshow') }}"  class="nav-link text-white bg-danger">Ver menus</a>
                                <a href="{{ route('comida.add') }}"  class="nav-link text-white bg-danger">Añadir menus</a>
                            </div>
                        </li>
                    </ul>

                    <!--ACCIONES ACTORES-->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" id="week-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actores</a>
                            <div class="dropdown-menu bg-danger" aria-labelledby="week-dropdown">
                                <a href="{{ route('actor.adminshow') }}"  class="nav-link text-white bg-danger">Ver Actor</a>
                                <a href="{{ route('actor.add') }}"  class="nav-link text-white bg-danger">Añadir Actor</a>
                            </div>
                        </li>
                    </ul>
                    
                    <!--ACCIONES ACTORES-->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle bg-danger" id="week-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Directores</a>
                                <div class="dropdown-menu" aria-labelledby="week-dropdown">
                                    <a href="{{ route('director.adminshow') }}"  class="nav-link text-black bg-danger">Ver Director</a>
                                    <a href="{{ route('director.add') }}"  class="nav-link text-black bg-danger">Añadir Director</a>
                                    </div>
                        </li>
                    </ul>
                                              
                </ul>
            </div>


      


            <div class="navbar-right bg-danger">
                @if(Auth::check())
                    <div class="dropdown bg-danger">
                        <button class="usuario">{{ auth()->user()->name }}</button>
                        <div class="dropdown-content user-dropdown bg-danger">
                            <a href="{{ route('profile.edit') }}" class="dropdown-item bg-danger">Ajustes</a>
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="bg-danger">
                                Cerrar sesión
                            </a>
                            
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            
                        </div>                
                    </div>
                @else
                    <a href="{{ route('login') }}" class="inicios text-white">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="inicios text-white">Registrarse</a>
                @endif
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</header>