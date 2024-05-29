@extends('master')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form ModificarDirector">
        <h1>Modificar Director</h1>
        <form method="POST" action="{{ route('director.update', $director->id) }}" class="user-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Titulo">Nombre: </label>
                <input type="string" name="nombre" value="{{ $director->nombre }}" class="form-control">

            </div>

            <div class="form-group">
                <label for="imagen">Apellido: </label>
                <input type="string" name="apellido" value="{{ $director->apellido }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Descripcion">ID Película:</label>
                <input type="number" name="movie_id" value="{{ $director->movie_id }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-danger">Guardar cambios</button>
        </form>
    </div>
@endsection
