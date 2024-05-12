@extends('master')

@section('content')

<div class="container">

    <div class="row" style="padding: -250px">
    @foreach($PromoList as $promo)
    <div class="col-md-4">
    <div class="card- promo-card">
        <h2 class="tituloP">{{$promo->titulo}}</h2>
        <img src="{{ asset('imagenes/promociones/' . $promo->imagen) }}" class="promimg" style="height: 100px">
        <p class="desc">Descripcion: {{$promo->descripcion}}</p>
        <p>Precio: {{$promo->Precio}}

    </div>


    </div>
    @endforeach
    </div>

</div>



@endsection



