@extends('master')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form AñadirForm">
        <h1>Añadir Película</h1>
        <form method="POST" action="{{ route('movies.store') }}">
            @csrf

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

@endsection