@extends('master')

@section('content')



<div class="container">

    <div class="row">
    @foreach($PromoList as $promo)
    <div class="col-md-4">
    <div class="card- comida-card">
        <h2 class="titulo">{{$promo->titulo}}</h2>
        <p>Descripcion: {{$promo->descripcion}}</p>
        <p>Precio: {{$promo->Precio}}
    </div>


    </div>
    @endforeach
    </div>

</div>

@endsection



