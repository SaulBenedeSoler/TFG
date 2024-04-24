@extends('master')

@section('content')
<div class="centrado">
    <div class="peliculas">
        <div class="contenido">
            <div class="titulo-imagen">
                <h1>{{ $movie->title }}</h1>
                <img src="{{ url('imagenes/') . '/' . $movie->imagen }}" class="IMAGEN">
            </div>
            <div class="parrafos">
                <p>Género: {{ $movie->genero }}</p>
                <p>Fecha de Lanzamiento: {{ $movie->fecha_lanzamiento }}</p>
                <p>Duración: {{ $movie->duracion }}</p>
                <p>Director: {{$movie->director->nombre}} {{$movie->director->apellido}}</p>
                <p>Actor Principal: {{$movie->actor->nombre}} {{$movie->actor->apellido}}</p>
                <p>Descripción: {{ $movie->descripcion }}</p>
                <button type="submit" class="botonSala bg-warning"><a href="{{ url('/mostrar-sala') }}" class="texto text-dark">Ver Sala</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
