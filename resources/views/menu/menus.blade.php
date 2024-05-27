@extends('master')

@section('content')
    

    <div class="container">
    
    
 
        <div class="row" style="padding: -250px">
            @foreach(Auth::user()->menbuy as $menubuy)
            <div class="col-md-4">
            <div class="card- menBuy-card">
                <h2 class="tituloP">{{$menBuy->Comida->titulo}}</h2>
                <img src="{{ asset('imagenes/Menus/' . $menBuy->Comida->imagen) }}" class="promimg" style="height: 100px">
                <p class="desc">Descripcion: {{$menBuy->Comida->descripcion}}</p>
                <p>Precio: {{$menBuy->Comida->Precio}}
            </div>

        @endforeach
    
    </div>






@endsection