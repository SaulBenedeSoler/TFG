@extends('master')

@section('content')
<div class="centrado">
        <h1>Añadir Comida</h1>

        <form method="POST" action="{{ route('comida.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Imagen</label>
                <input type="text" name="imagen" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="text" name="precio" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-danger">Añadir Comida</button>
        </form>
    </div>
@endsection
