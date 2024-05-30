@extends('master')

@section('content')
<!--Creo un div par asignar el responsive
Creo una tabla que contiene los datos necesarios para mostrar de los usuarios y que es posible
debido al foreach creado
Creo un formulario que llama a la funcion destroy y que busca por id del usuario para eliminarlo-->
<div class="table-responsive">
    <table class="table modUsu">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Tipo de usuario</th>
                <th>Eliminar Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->password}}</td>
                    <td>{{$usuario->usertype}}</td>
                    <td>
                        <form action="{{ route('admin.borrar', ['id' => $usuario->id]) }}" method="POST" class="nav-link text-dark">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
