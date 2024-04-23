@extends('master')

@section('content')
<!--CREO UNA CARD CON UN BULCE FOREACH AL CUAL LO METO DENTRO DE UNA TABLA Y DIVIDO DE 4 EN 4 LAS FILAS GRACIAS AL IF LOOP-->
<div class="container">
    <div class="d-flex justify-content-center">
    <table class="table">
        <tr>
            @foreach($PromoList as $promo)
            <td>
                <div class="card-w mb-4" class="tarjeta">
                    <h1>{{ $promo->titulo }}</h1>
                    <a href="{{ route('promociones.show', ['id' => $promo->id]) }}">
                    </a>
                    <div class="mt-3">
                        <p>Descripcion: {{ $promo->descripcion }}</p>
                        <p>Precio: {{ $promo->Precio }}</p>
                    </div>
                </div>
            </td>
            @if($loop->iteration % 4 == 0)
            </tr><tr>
            @endif
            @endforeach
        </tr>
    </table>
    </div>
</div>

@endsection

