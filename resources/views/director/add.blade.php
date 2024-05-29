@extends('master')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form AnadirDirector">
        <h1>Añadir Director</h1>

        <form method="POST" action="{{ route('director.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Id Película</label>
                <input type="number" name="movie_id" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-warning">Añadir Director</button>
        </form>
    </div>
@endsection
