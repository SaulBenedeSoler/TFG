@extends('master')

@section('content')
    <div class="container">
        <h1>Añadir Promocion</h1>

        <form method="POST" action="{{ route('promociones.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input type="string" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Imagen</label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="string" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="string" class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Añadir promocion</button>
        </form>
    </div>
@endsection
