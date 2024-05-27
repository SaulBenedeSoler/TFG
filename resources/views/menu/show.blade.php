@extends('master')

@section('content')

<div class="Container">

    <div class="datosUsu">
    <h1>{{$userName}}</h1>
    </div>

    <div class="Row">
        @foreach($menbuy as $menBuy)

        <div class="col-md-6">
            <div class="card-header bg-danger text-white">
                <h2 class="tituloP">{{$menBuy->comida->titulo}}</h2>
            </div>

            <div class="card- menBuy-card">
            <img src="{{ asset('imagenes/Menus/' . $menBuy->comida->imagen) }}" style="height: 200px">
            <p class="desc">Descripcion: {{$menBuy->comida->descripcion}}</p>
            <p>Precio: {{$menBuy->comida->Precio}}
            </div>
            @endforeach

        </div>

    </div>

</div>



@endsection
