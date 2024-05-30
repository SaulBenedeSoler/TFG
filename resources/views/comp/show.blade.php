@extends('master')

@section('content')


    <div class="Container">
    <!--Creo diferentes divs con sus caracteristicas para mostrarlos a mi gusto usando css y bootstrap
        Uso un foreach para mostrar toda la información de todas las promociones adquiridas por el usuario
        Creo un formulario el cual llama a la función prom.destroy y busca el id de la promoción y usa el metod post
        y se encarga de eliminar esa promoción adquirida por el usuario--->
        <div class="comP">
        <div class="row justify-content-center mb-3" style="padding: -250px">
            @foreach($prombuy as $promo)

        <div class="col-md-6 mb-4">
            <div class="card-header bg-danger menBuy-header text-white">
                <h2 class="tituloP">{{$promo->promociones->titulo}}</h2>
            </div>
      
        <div class="card- menBuy-card">

            <img src="{{ asset('imagenes/promociones/' . $promo->promociones->imagen) }}" class="promimg" style="height: 150px">
            <p class="desc"> {{$promo->promociones->descripcion}}</p>
            <p>Precio: {{$promo->promociones->Precio}}
            <form action="{{ route('prom.destroy', ['id' => $promo->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Devolver</button>
            </form>
        </div>
            </div>
    
 
        
        @endforeach
        </div>
    
    </div>


@endsection


