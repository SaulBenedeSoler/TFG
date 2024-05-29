@extends('master')

@section('content')

<div class="container">

    <div class="row" style="padding: -250px">
    @foreach($PromoList as $promo)
    <div class="col-md-4">
    <div class="card- promo-card">
        <p class="tituloP"><b>{{$promo->titulo}}</b></p>
        <img src="{{ asset('imagenes/promociones/' . $promo->imagen) }}" class="promimg" style="height: 100px">
        <p class="desc">Descripcion: {{$promo->descripcion}}</p>
        <p>Precio: {{$promo->Precio}}
            <form action="{{ route('compra.store', ['promocionid' => $promo->id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Comprar</button>
            </form>
    </div>


    </div>
    @endforeach
    </div>

</div>



@endsection



