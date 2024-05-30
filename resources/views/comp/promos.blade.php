@extends('master')

@section('content')

<!--Creo diferentes divs con su adecuación con css y bootstrap 
Llamo  a los datos y esto sirve para mostrarle al usuario la promoción
adquirida-->

<div class="Container">

    <div class="row justify-content-center mb-3" style="padding: -250px">
    

    <div class="col-md-6 mb-4">
        <div class="card-header bg-danger menBuy-header text-white">
            <h2 class="tituloP">{{ $promName }}</h2>
        </div>
  
    <div class="card- menBuy-card">

        <img src="{{$IMAGEN}}" style="height: 200px; ">
        <p class="desc">Descripción:  {{$desc}}</p>
        <p>Precio: {{ $precio }}</p>

    </div>
        </div>


    
 
    </div>

</div>
           


@endsection

