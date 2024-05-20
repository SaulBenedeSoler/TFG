@extends('master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>imagen</th>
            <th>descripcion</th>
            <th>precio</th>
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
                    <button class="btn btn-danger text-light"><a href="{{ route('comida.edit', ['id' => $comi->id]) }}" class="text-decoration-none text-light">Modificar</a></button>
                </td>

                <td>
                    <form action="{{ route('comida.destroy', ['id' => $comi->id]) }}" method="POST">
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