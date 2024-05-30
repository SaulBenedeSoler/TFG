@extends('master')

@section('content')
<!--Creo una serie de divs con caracteristicas de bootstrap para adecuarlo a mi gusto
    Dentro de esto creo un formulario con meotod post y que realiza la acción de llamar a la funcion
    update y buscar el id de la película para mostrar sus datos en el formulario y que estos sean cambiados--->
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

        
            

            <button type="submit" class="btn btn-danger">Guardar cambios</button>
        </form>
    </div>
</div>
@endsection