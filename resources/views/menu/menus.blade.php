@extends('master')

@section('content')
<div class="Container">
        <!--Mediante diferentes divs creo la estructura del menu que se motrara al adquirir uno-->
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 mb-4">
            <div class="card-header bg-danger menOnly-header text-white">
                <h2 class="tituloP">{{ $menuName }}</h2>
            </div>
            <div class="card- menOnly-card justify-content-center">
                <img src="{{$IMAGEN}}" class="img-fluid" alt="Menu Image" style="max-height: 200px; max-width: 200px;">
                <p class="desc">Descripción:  {{$desc}}</p>
                <p>Precio: {{ $precio }}</p>
            </div>
        </div>
    </div>
</div>
@endsection









