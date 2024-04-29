@extends('master')

@section('content')
    <div class="container">
        <h1>{{ $movie->title }}</h1>
        <p><b>Género:</b> {{ $movie->genero }}</p>
        <p><b>Fecha de Lanzamiento:</b> {{ $movie->fecha_lanzamiento }}</p>
        <p><b>Duración:</b> {{ $movie->duracion }}</p>
        <p><b>Descripción:</b> {{ $movie->descripcion }}</p>
        <img src="{{ asset('imagenes/' . $movie->imagen) }}" alt="{{ $movie->title }}">
        <a href="{{ route('movies.sala', ['id' => $movie->id]) }}">Ver Sala</a>
    </div>
@endsection
