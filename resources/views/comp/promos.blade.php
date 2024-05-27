@extends('master')

@section('content')
    

    <div class="container">
    
    
        @foreach(Auth::user()->promobuy as $promoBuy)

        <ul>
            <li>{{$UserName}}</li>
            <li>{{$promoName}}</li>
            <li>{{$promoImagen}}</li>
            <li>{{$promoDesc}}</li>
            <li>{{$promoTipo}}</li>
            <li>{{$promoPrecio}}</li>
            
        </ul>


        @endforeach
    
    </div>






@endsection