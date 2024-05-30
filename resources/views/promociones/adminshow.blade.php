@extends('master')

@section('content')
<!--Creo un div par asignar el responsive
Creo una tabla que contiene los datos necesarios para mostrar las promociones y que es posible
debido al foreach creado
Creo un formulario que llama a la funcion destroy y que busca por id de la promoción para eliminarla
Y mediante un botón llamo  a la función promociones.edit y busca el id de la promoción seleccionada y permite modificarla-->

<div class="table-responsive">
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
                <td>
                    <a href="{{ route('promociones.edit', ['id' => $promo->id]) }}" class="btn btn-danger">Modificar Promocion</a>
                </td>
                
                <td><form action="{{ route('promociones.destroy', ['id' => $promo->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </td>


            </tr>
            @endforeach
    </tbody>
</table>
</div>
@endsection