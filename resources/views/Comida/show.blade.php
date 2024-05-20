@extends('master')


@section('content')


<div class="container">
    <div class="row">
        @foreach($comidaList as $comida)
        <div class="col-md-4">
            <div class="card mb-4 h-100">
                <h1>{{ $comida->titulo }}</h1>

                    <img src="{{ url('imagenes/Menus') . '/' . $comida->imagen }}" class="comidaImg img-Fluid">

                <div class="mt-5">
                    <p>Descripcion: {{ $comida->descripcion }}</p>
                    <p>Precio: {{ $comida->Precio }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


@endsection