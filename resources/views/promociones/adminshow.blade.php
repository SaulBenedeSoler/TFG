@extends('master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>imagen</th>
            <th>descripcion</th>
            <th>precio</th>
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
                <td><form action="{{ route('promociones.destroy', ['id' => $promo->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </td>
                <td>
                    <a href="{{ route('promociones.edit', ['id' => $promo->id]) }}" class="btn btn-danger">Modificar Promocion</a>
                </td>

            </tr>
            @endforeach
    </tbody>
</table>
@endsection