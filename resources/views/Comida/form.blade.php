@extends('master')

@section('content')
<!--Creo una serie de divs con caracteristicas de bootstrap para adecuarlo a mi gusto
    Dentro de esto creo un formulario con meotod post y que realiza la acción de llamar a la funcion
    update y buscar el id del menu para mostrar sus datos en el formulario y que estos sean cambiados--->
<div class="container d-flex justify-content-center align-items-center">
    <div class="user-form ModificarMenu">
        <h1>Modificar Menu</h1>
        <form method="POST" action="{{ route('comida.update', $comida->id) }}" class="user-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Titulo">Titulo: </label>
                <input type="string" name="titulo" value="{{ $comida->titulo }}" class="form-control">

            </div>

            <div class="form-group">
                <label for="imagen">imagen: </label>
                <input type="string" name="imagen" value="{{ $comida->imagen }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Descripcion">Descripcion:</label>
                <input type="string" name="descripcion" value="{{ $comida->descripcion }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="precio">Precio: </label>
                <input type="string" name="precio" value="{{ $comida->Precio }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-danger">Guardar cambios</button>
        </form>
    </div>
@endsection
