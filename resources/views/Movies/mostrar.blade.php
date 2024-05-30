@extends('master')

@section('content')
  
  <!--Creo una serie de desplegable con un foreach para poder llamar a los datos de la tabla movie
  Asigno un enlace moda al boton el cal busc apor id de la película 
  Dentro de esta muestro los datos de la película y hay un bitón qu meustra los diferentes horarios
  de las salas y me llevan a estas-->
  <ul class="listaMostrar">
    @foreach($movies as $movie)
    <li class="list-item d-flex">
        <img src="{{ asset('imagenes/'. $movie->imagen) }}" class="img-fluid imgMostrar">
      <div class="info">
        <h5 class="titulo">{{ $movie->title }}</h5>
        <br>
        <a data-bs-toggle="modal" data-bs-target="#infoModal-{{ $movie->id }}" id="Modal">
          <button class="botonModal bg-warning">Informate y reserva tu entrada</button>
        </a>
      </div>

      <!--VENTANA MODAL CON LA INFO Y BOTÓN PARA IR A LA SALA--->

      <div class="modal fade" id="infoModal-{{ $movie->id }}" tabindex="-1" aria-labelledby="infoModalLabel-{{ $movie->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="infoModalLabel-{{ $movie->id }}">{{$movie->title}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <ul class="modalul">
                <video width="100%" height="auto" controls muted> 
                  <source src="{{ asset('imagenes/' . $movie->trailer) }}" type="video/mp4">
                </video>
                <div class="container">
                  <div style="width: 70%;">
                    <p><b>Género:</b> {{ $movie->genero }}</p>
                    <p><b>Fecha de Lanzamiento:</b> {{ $movie->fecha_lanzamiento }}</p>
                    <p><b>Actor: </b> {{$movie->actor->nombre}} {{$movie->actor->apellido}}</p>
                    <p><b>Director: </b> {{$movie->director->nombre}} {{$movie->director->apellido}}</p>
                    <p><b>Duración:</b> {{ $movie->duracion }}</p>
                    <p><b>Descripción:</b> {{ $movie->descripcion }}</p>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                        Selecciona Horario
                      </button>
                      <ul class="dropdown-menu bg-warning">
                        <li class="bg-warning"><a class="dropdown-item text-white bg-warning" href="{{ route('generarSala', ['movieID' => $movie->id, 'horario' => '10:30']) }}" class="btn btn-warning">10:30</a></li>
                        <li><a class="dropdown-item text-white bg-warning" href="{{ route('generarSala', ['movieID' => $movie->id, 'horario' => '12:30']) }}" class="btn btn-warning">12:30</a></li>
                        <li><a class="dropdown-item text-white bg-warning" href="{{ route('generarSala', ['movieID' => $movie->id, 'horario' => '17:30']) }}" class="btn btn-warning">17:30</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
    <!--Crep in script el cual hace que los videos de los trailer esten muteados-->
  <script>
    window.onload = function() {
      var videos = document.getElementsByTagName('video');
      for (var i = 0; i < videos.length; i++) {
        videos[i].muted = true;
      }
    }
  </script>

@endsection