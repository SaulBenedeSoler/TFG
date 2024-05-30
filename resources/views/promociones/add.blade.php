@extends('master')

@section('content')
<!--Creo una serie de divs los cuales son mdoificados con bootstrap para conseguir los ajustes deseados
Dentro de estos divs creo un formulario el cual usa el metodo POST
Realiza la accion sobre la ruta promociones.store el cual sirve para añadir las promociones
Dentro del formulario pongo los datos a rellenar-->
<div class="container d-flex justify-content-center align-items-center for">
    <div class="user-form AnadirProm">
        <h1>Añadir Promoción</h1>

        <form method="POST" action="{{ route('promociones.store') }}">
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

            <button type="submit" class="btn btn-warning">Añadir Promoción</button>
        </form>
    </div>
@endsection
