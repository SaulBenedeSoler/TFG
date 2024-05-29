@extends('master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Id Película</th>
            <th>Modificar Actor</th>
            <th>Eliminar Actor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($director as $dir)
        <tr>
                <td>{{$dir->nombre}}</td>
                <td>{{$dir->apellido}}</td>
                <td>{{$dir->movie_id}}</td>

                <td>
                    <button class="btn btn-danger text-light"><a href="{{ route('director.edit', ['id' => $dir->id]) }}" class="text-decoration-none text-light">Modificar</a></button>
                </td>

                <td>
                    <form action="{{ route('director.destroy', ['id' => $dir->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-light" type="submit">Borrar</button>
                </form>
                </td>

            </tr>
            @endforeach
    </tbody>
</table>
@endsection