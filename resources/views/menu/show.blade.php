@extends('master')

@section('content')

<div class="Container">
    <!--Mediante un for each y varios divs creo una estructura
    Que se encarga de mostrar toods los menus obtenidos por el usuario
    Creo un formulario que llama a la función de menu.destroy para que el usario
    pueda cancelar la reserva-->
    <div class="row justify-content-center mb-3" style="padding: -250px">
        @foreach($menbuy as $menBuy)
    <div class="col-md-6 mb-4">
        <div class="card-header bg-danger menBuy-header text-white">
            <h2 class="tituloP">{{ $menBuy->comida->titulo }}</h2>
        </div>
    <div class="card- menBuy-card">
        <img src="{{ asset('imagenes/Menus/' . $menBuy->comida->imagen) }}" style="height: 200px; width:500px;">
        <p class="desc">Descripción: {{ $menBuy->comida->descripcion }}</p>
        <p>Precio: {{ $menBuy->comida->Precio }}</p>
        <form action="{{ route('menu.destroy', ['id' => $menBuy->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>


    </div>
    
    @endforeach
    </div>

</div>


@endsection











