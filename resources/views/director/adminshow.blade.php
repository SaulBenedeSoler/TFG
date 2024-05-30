@extends('master')

@section('content')
<!--Creo un div par asignar el responsive
Creo una tabla que contiene los datos necesarios para mostrar de los directores y que es posible
debido al foreach creado
Creo un formulario que llama a la funcion destroy y que busca por id del director para eliminarlo
Y mediante un botón llamo  a la función director.edit y busca el id del director seleccionado y permite modificarlo-->
<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Id Película</th>
            <th>Modificar Director</th>
            <th>Eliminar Director</th>
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
</div>
@endsection