@extends('master')


@section('content')


<div class="container">

    <div class="row" style="padding: -250px">
        @foreach($comidaList as $comida)
        <div class="col-md-4">
            <div class="card- promo-card">
                <h2 class="tituloP">{{$comida->titulo}}</h2>
                <a href="{{ route('comida.show', ['id' => $comida->id]) }}" class="enlaceFC">
                    <img src="{{ url('imagenes/Menus') . '/' . $comida->imagen }}" class="menus" style="width: 50px height: 50px">
                </a>
                <div class="mt-5">
                    <p>Descripcion: {{ $comida->descripcion }}</p>
                    <p>Precio: {{ $comida->Precio }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


@endsection