@extends('master')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form ModificarActor">
        <h1>Modificar Actor</h1>
        <form method="POST" action="{{ route('actor.update', $actor->id) }}" class="user-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Titulo">Nombre: </label>
                <input type="string" name="nombre" value="{{ $actor->nombre }}" class="form-control">

            </div>

            <div class="form-group">
                <label for="imagen">Apellido: </label>
                <input type="string" name="apellido" value="{{ $actor->apellido }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Descripcion">ID Película:</label>
                <input type="number" name="movie_id" value="{{ $actor->movie_id }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-danger">Guardar cambios</button>
        </form>
    </div>
@endsection
