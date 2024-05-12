@extends('master')

@section('content')

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
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="infoModalLabel-{{ $movie->id }}">{{$movie->title}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <ul class="modalul">
                <iframe src="{{ asset('imagenes/' . $movie->trailer)  }}" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                <div class="container">

                  <div style="width: 70%;">
                      <p><b>Género:</b> {{ $movie->genero }}</p>
                      <p><b>Fecha de Lanzamiento:</b> {{ $movie->fecha_lanzamiento }}</p>
                      <p><b>Actor: </b> {{$movie->actor->nombre}} {{$movie->actor->apellido}}</p>
                      <p><b>Director: </b> {{$movie->director->nombre}} {{$movie->director->apellido}}</p>
                      <p><b>Duración:</b> {{ $movie->duracion }}</p>
                      <p><b>Descripción:</b> {{ $movie->descripcion }}</p>
                      <button type="submit" class="botonSala bg-warning"><a href="{{ route('generarSala', ['movieID' => $movie->id]) }}" class=" enlaceS text-decoration-none">Ver Sala</a></button>
                  </div>
              </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </li>
    @endforeach
  </ul>

@endsection