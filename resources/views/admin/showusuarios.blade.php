@extends('master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Tipo de usuario</th>
            <th>Añadir Usuario</th>
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
                    <button class="bg-warning"><a href="{{ route('admin.add') }}" class="nav-link text-dark">Añadir Usuario</a></button>
                </td>
                <td><form action="{{ route('admin.borrar', ['id' => $usuario->id]) }}" method="POST" class="nav-link text-dark">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning">Borrar</button>
                </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection
