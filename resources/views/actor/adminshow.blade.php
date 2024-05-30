@extends('master')

@section('content')
<!--Creo un div par asignar el responsive
Creo una tabla que contiene los datos necesarios para mostrar de los actores y que es posible
debido al foreach creado
Creo un formulario que llama a la funcion destroy y que busca por id del actor para eliminarlo-->
<div class="table-responsive">
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
        @foreach ($actor as $act)
        <tr>
                <td>{{$act->nombre}}</td>
                <td>{{$act->apellido}}</td>
                <td>{{$act->movie_id}}</td>

                <td>
                    <button class="btn btn-danger text-light"><a href="{{ route('actor.edit', ['id' => $act->id]) }}" class="text-decoration-none text-light">Modificar</a></button>
                </td>

                <td>
                    <form action="{{ route('actor.destroy', ['id' => $act->id]) }}" method="POST">
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