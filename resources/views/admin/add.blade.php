@extends('master')

@section('content')
    <div class="container">
        
        <!-- FORMULARIO CON ACTION LIGADO A LA FUNCION ADMIN.STORE PARA ACTUALIZAR LA BASE Y CONTIENE LOS DATOS NECESARIOS PARA AÑADIR NUEVAS PELICULAS -->
        <h1>Añadir Usuario</h1>

        <form method="POST" action="{{ route('admin.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="usertype" class="form-label">Usertype</label>
                <input type="text" class="form-control" id="usertype" name="usertype">
            </div>
            <button type="submit" class="btn btn-danger">Añadir Usuario</button>
        </form>
    </div>
@endsection
