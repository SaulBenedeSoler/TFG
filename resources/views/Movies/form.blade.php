@extends('master')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form ModificarForm">
        <h1>Modificar Película</h1>
        <form method="POST" action="{{ route('movies.update', $movie->id) }}" class="user-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titulo: </label>
                <input type="string" name="title" value="{{ $movie->title }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Descripcion">Descripcion:</label>
                <input type="string" name="descripcion" value="{{ $movie->descripcion }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="genero">Genero: </label>
                <input type="string" name="genero" value="{{ $movie->genero }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="fecha_lanzamiento">fecha_lanzamiento: </label>
                <input type="string" name="fecha_lanzamiento" value="{{ $movie->fecha_lanzamiento }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="duracion">Duración: </label>
                <input type="string" name="duracion" value="{{ $movie->duracion }}" class="form-control">
            </div>
            

            <div class="form-group">
                <label for="imagen">imagen: </label>
                <input type="string" name="imagen" value="{{ $movie->imagen }}" class="form-control">
            </div>

        
            

            <button type="submit" class="btn btn-warning">Guardar cambios</button>
        </form>
    </div>
</div>
@endsection