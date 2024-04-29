@extends('master')

@section('content')
    <div class="container">
        <h1>Añadir Película</h1>

        <form method="POST" action="{{ route('movies.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <input type="text" class="form-control" id="genero" name="genero">
            </div>
            <div class="mb-3">
                <label for="fecha_lanzamiento" class="form-label">Fecha de Lanzamiento</label>
                <input type="text" class="form-control" id="fecha_lanzamiento" name="fecha_lanzamiento">
            </div>
            <div class="mb-3">
                <label for="duracion" class="form-label">Duración</label>
                <input type="text" class="form-control" id="duracion" name="duracion">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">URL de la Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen">
            </div>
            <div class="mb-3">
                <label for="director_id" class="form-label">ID del Director</label>
                <input type="text" class="form-control" id="director_id" name="director_id">
            </div>
            <div class="mb-3">
                <label for="actor_id" class="form-label">ID del Actor</label>
                <input type="text" class="form-control" id="actor_id" name="actor_id">
            </div>
            <div class="mb-3">
                <label for="semana_id" class="form-label">ID de la Semana</label>
                <input type="text" class="form-control" id="semana_id" name="semana_id">
            </div>
            <button type="submit" class="btn btn-primary">Añadir Película</button>
        </form>
    </div>
@endsection
