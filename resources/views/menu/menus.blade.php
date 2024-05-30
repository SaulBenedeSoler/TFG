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
                <img src="{{$IMAGEN}}" class="imgM" alt="Menu Image"class="menimg" style="height: 200px; width:200px;">
                <p class="desc">  {{$desc}}</p>
                <p>Precio: <b>{{ $precio }}</b></p>
            </div>
        </div>
    </div>
</div>
@endsection
