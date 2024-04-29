@extends('master')


@section('content')

<h1>Confirmar Eliminación de Película</h1>
<p>¿Estás seguro de que deseas eliminar la película "{{ $pelicula->titulo }}"?</p>
<form action="{{ route('eliminar.pelicula', ['id' => $pelicula->id]) }}" method="POST">
    @csrf
    <button type="submit">Eliminar</button>
</form>
<a href="{{ route('admin.index') }}">Cancelar</a>

@endsection