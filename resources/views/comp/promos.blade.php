@extends('master')

@section('content')


<div class="ROw justify-content-center mb-3" style="padding: -250px">
 
    <div class="Coontainer">
    <div class="col-md-6 mb-4">
        <div class="card-header bg-danger promOnly-header text-white">
            <h2 class="tituloP">{{ $menuName }}</h2>
        </div>
        <div class="card- promOnly-card justify-content-center">
            <img src="{{$IMAGEN}}" style="height: 200px; width:200px;">
        <p class="desc">Descripción:  {{$desc}}</p>
        <p>Precio: {{ $precio }}</p>

        </div>
    
    
    </div>

    </div>
</div>
       
           


@endsection

