@extends('master')

@section('content')

<div class="container">

    <div class="row" style="padding: -250px">
        @foreach($comidaList as $comida)
        <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
            <div class="card-header bg-danger text-white">
                <h2 class="tituloP">{{$comida->titulo}}</h2>
            </div>
        <div class="card- comida-card">
            <img src="{{ asset('imagenes/Menus/' . $comida->imagen) }}" class="promimg" style="height: 200px">
            <p class="desc">Descripcion: {{$comida->descripcion}}</p>
            <p>Precio: {{$comida->Precio}}
        </div>
        @endforeach
        </div>
    </div>

</div>



@endsection
