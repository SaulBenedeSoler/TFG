@extends('master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Género</th>
            <th>Fecha de Lanzamiento</th>
            <th>Duración</th>
            <th>Modificar Peliculas</th>
            <th>Borrar Películas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movie as $movi)
            <tr>
                <td>{{ $movi->title }}</td>
                <td>{{ $movi->descripcion }}</td>
                <td>{{ $movi->genero }}</td>
                <td>{{ $movi->fecha_lanzamiento }}</td>
                <td>{{ $movi->duracion }}</td>
                <td>
                    <button class="btn btn-danger text-light"><a href="{{route('form.edit', $movi->id)}}" class="text-decoration-none text-light">Modificar</a></button>
                </td>
                <td>
                    <form action="{{route('movies.destroy', $movi->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
