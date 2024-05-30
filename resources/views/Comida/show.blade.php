@extends('master')

@section('content')

<div class="Container">
    <!--Creo diferentes divc modificads con bootstrap y css
    Muestro toda la información de los menus gracias al uso del foreach
    Creo un formulario el cual llama a la función menu.store y busca el id del menu
    y compra el menu-->
    <div class="row justify-content-center mb-3" style="padding: -250px">
        @foreach($comidaList as $comida)
    <div class="col-md-6 mb-4">
        <div class="card-header bg-danger menBuy-header text-white">
            <h2 class="tituloP">{{$comida->titulo}}</h2>
        </div>
    <div class="card- menBuy-card">
        <img src="{{ asset('imagenes/Menus/' . $comida->imagen) }}" style="height: 200px" class="menimg">
        <p class="desc">Descripcion: {{$comida->descripcion}}</p>
        <p>Precio: {{$comida->Precio}}</p>
        <form action="{{ route('menu.store', ['menuid' => $comida->id]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Comprar</button>
        </form>
    </div>


    </div>
    
    @endforeach
    </div>

</div>


@endsection

