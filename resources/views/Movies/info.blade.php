
@extends('master')

@section('content')
<h1 style="text-align: center; margin-bottom: 2rem;">{{ $movie->title }}</h1>
<div class="container">
    <div>
        <img src="{{ asset('imagenes/' . $movie->imagen) }}" alt="{{ $movie->title }}">
    </div>
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
@endsection