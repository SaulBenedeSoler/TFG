@extends('master')

@section('content')
<!--Creo una serie de divs los cuales son mdoificados con bootstrap para conseguir los ajustes deseados
Dentro de estos divs creo un formulario el cual usa el metodo POST
Realiza la accion sobre la ruta movies.store el cual sirve para añadir películas
Dentro del formulario pongo los datos a rellenar-->
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form AñadirForm">

        <div class="titulo">
        <h1>Añadir Película</h1>
        </div>
        <form method="POST" action="{{ route('movies.store') }}">
            @csrf

            <div class="conteni">

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Género</label>
                <input type="text" name="genero" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha de Lanzamiento</label>
                <input type="string" name="fecha_lanzamiento" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Duración</label>
                <input type="string" name="duracion" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">URL de la Imagen</label>
                <input type="text" name="imagen" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">URL del Trailer</label>
                <input type="text" name="trailer" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ID del Director</label>
                <input type="number" name="director_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ID del Actor</label>
                <input type="number" name="actor_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ID de la Semana</label>
                <input type="number" name="semana_id" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-warning">Añadir Película</button>
        </form>
    </div>
    </div>

@endsection