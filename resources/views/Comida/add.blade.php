@extends('master')

@section('content')
<!--Creo una serie de divs los cuales son mdoificados con bootstrap para conseguir los ajustes deseados
Dentro de estos divs creo un formulario el cual usa el metodo POST
Realiza la accion sobre la ruta comida.store el cual sirve para añadir menus
Dentro del formulario pongo los datos a rellenar-->
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form AnadirMenu">
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
