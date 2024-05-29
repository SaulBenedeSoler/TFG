@extends('master')

@section('content')

<div class="container">

    <div class="row" style="padding: -250px">
    @foreach($prombuy as $promo)
    <div class="col-md-4">
    <div class="card- promo-card">
        <h2 class="tituloP">{{$promo->promociones->titulo}}</h2>
        <img src="{{ asset('imagenes/promociones/' . $promo->promociones->imagen) }}" class="promimg" style="height: 100px">
        <p class="desc">Descripcion: {{$promo->promociones->descripcion}}</p>
        <p>Precio: {{$promo->promociones->Precio}}
        <form action="{{ route('prom.destroy', ['id' => $promo->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>


    </div>
    @endforeach
    </div>

</div>



@endsection



