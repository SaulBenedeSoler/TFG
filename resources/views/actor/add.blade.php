@extends('master')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form AnadirActor">
        <h1>Añadir Actor</h1>

        <form method="POST" action="{{ route('actor.store') }}">
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

            <button type="submit" class="btn btn-danger">Añadir Actor</button>
        </form>
    </div>
@endsection
