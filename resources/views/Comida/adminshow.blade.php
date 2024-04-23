@extends('master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>imagen</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>Añadir Menu</th>
            <th>Modificar menu</th>
            <th>Eliminar Menu</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comida as $comi)
        <tr>
                <td>{{$comi->titulo}}</td>
                <td>{{$comi->imagen}}</td>
                <td>{{$comi->descripcion}}</td>
                <td>{{$comi->Precio}}</td>
                <td>
                    <button class="bg-warning"><a href="{{ route('comida.add') }}" class="nav-link text-dark">Añadir</a></button>
                </td>
                <td>
                    <form action="{{ route('comida.destroy', ['id' => $comi->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-warning" type="submit">Borrar</button>
                </form>
                </td>
                <td>
                    <button class="bg-warning"><a href="{{ route('comida.edit', ['id' => $comi->id]) }}" class="btn btn-warning">Modificar</a></button>
                </td>

            </tr>
            @endforeach
    </tbody>
</table>
@endsection