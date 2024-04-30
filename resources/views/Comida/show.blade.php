@extends('master')

@section('content')

<div class="container">

    <div class="row">
    @foreach($ComidaList as $comida)
    <div class="col-md-4">
    <div class="card- comida-card">
        <h2 class="titulo">{{$comida->titulo}}</h2>
         <img src="{{ url('imagenes/Menus') . '/' . $comida->imagen }}" class="menus">
        <p>Descripcion: {{$comida->descripcion}}</p>
        <p>Precio: {{$comida->Precio}}
    </div>


    </div>
    @endforeach
    </div>

</div>

@endsection
