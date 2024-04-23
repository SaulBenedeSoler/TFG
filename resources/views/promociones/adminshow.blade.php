@extends('master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>imagen</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>Añadir Promocion</th>
            <th>Modificar Promocion</th>
            <th>Eliminar Promocion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($promociones as $promo)
        <tr>
                <td>{{$promo->titulo}}</td>
                <td>{{$promo->imagen}}</td>
                <td>{{$promo->descripcion}}</td>
                <td>{{$promo->Precio}}</td>
                <td>
                    <button class="bg-warning"><a href="{{ route('promociones.add') }}" class="nav-link text-dark">Añadir</a></button>
                </td>
                <td><form action="{{ route('promociones.destroy', ['id' => $promo->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-warning">Eliminar</button>
                </form>
                </td>
                <td>
                    <a href="{{ route('promociones.edit', ['id' => $promo->id]) }}" class="btn btn-warning">Modificar Promocion</a>
                </td>

            </tr>
            @endforeach
    </tbody>
</table>
@endsection