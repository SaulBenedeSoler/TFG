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
            <div class="form-group">
                <label for="Titulo">Titulo: </label>
                <input type="string" name="titulo" class="form-control">

            </div>

            <div class="form-group">
                <label for="imagen">imagen: </label>
                <input type="string" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <label for="Descripcion">Descripcion:</label>
                <input type="string" name="descripcion" class="form-control">
            </div>

            <div class="form-group">
                <label for="precio">Precio: </label>
                <input type="string" name="Precio"class="form-control">
            </div>

            <div class="form-group">
                <label for="Descripcion">Tipo:</label>
                <input type="string" name="tipo"  class="form-control">
            </div>

            <button type="submit" class="btn btn-danger">Añadir Promoción</button>
        </form>
    </div>
@endsection