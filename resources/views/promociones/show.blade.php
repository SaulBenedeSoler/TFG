@extends('master')

@section('content')


    <div class="Container">
        <!--Creo diferentes divc modificads con bootstrap y css
        Muestro toda la información de los menus gracias al uso del foreach
        Creo un formulario el cual llama a la función menu.store y busca el id del menu
        y compra el menu-->
      
        <div class="row justify-content-center mb-3" style="padding: -250px">
            @foreach($PromoList as $promo)

        <div class="col-md-6 mb-4">
            <div class="card-header bg-danger menBuy-header text-white">
                <p class="tituloP"><b>{{$promo->titulo}}</b></p>
            </div>
      
        <div class="card- menBuy-card">

            <img src="{{ asset('imagenes/promociones/' . $promo->imagen) }}" class="promimg"  style="height: 150px;">
            <p class="desc"> {{$promo->descripcion}}</p>
            <p>Precio: {{$promo->Precio}}
                <form action="{{ route('compra.store', ['promocionid' => $promo->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Comprar</button>
                </form>
        </div>
            </div>
    
 
        
        @endforeach
        </div>
    
    </div>


@endsection



