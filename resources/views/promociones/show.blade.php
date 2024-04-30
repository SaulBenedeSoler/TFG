@extends('master')

@section('content')

<div class="row">
    <div class="container-fluid content-container">
        <div class="row">
            <div class="col-md-6">
                @foreach($PromoList->chunk(4)[0] as $promo)
                <div class="card mb-4 promo-card">
                    <h1>{{ $promo->titulo }}</h1>

                    <div class="mt-5">
                        <p>Descripción: {{ $promo->descripcion }}</p>
                        <p>Precio: {{ $promo->Precio }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach($PromoList->chunk(4)[1] as $promo)
                <div class="card mb-4 promo-card">
                    <h1>{{ $promo->titulo }}</h1>

                    <div class="mt-5">
                        <p>Descripción: {{ $promo->descripcion }}</p>
                        <p>Precio: {{ $promo->Precio }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection


