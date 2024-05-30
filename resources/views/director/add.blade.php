@extends('master')

@section('content')
<!--Creo una serie de divs los cuales son mdoificados con bootstrap para conseguir los ajustes deseados
Dentro de estos divs creo un formulario el cual usa el metodo POST
Realiza la accion sobre la ruta director.store el cual sirve para añadir directores
Dentro del formulario pongo los datos a rellenar-->
<div class="container d-flex justify-content-center align-items-center ">
    <div class="user-form AñadirDir">
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

            <button type="submit" class="btn btn-danger">Añadir Director</button>
        </form>
    </div>
@endsection
