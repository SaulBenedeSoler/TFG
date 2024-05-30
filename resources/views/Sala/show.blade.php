@extends('master')

@section('content')
<!---Cre un div en el cual muestro el titulo de la película--->
<div class="intro">
    <div class="titPel">
        <h1>{{ $movie->title }}</h1>
    </div>
<!--Creo un div para indicarle al usuario los asientos-->
    <div class="Instrucciones">
        <p><b>Asiento libre</b></p>
        <img src="{{ asset("imagenes/asientoLibre.png") }}" class="ins">
        <p><b>Asiento Ocupado</b></p>
        <img src="{{ asset("imagenes/asientoOcupado.png") }}" class="ins">
    </div>
<!--En este for each llamo a la variable salas 
    La cual mediante un for compara el asiento con el número máximo de asientos
    Luego con un if compruebo que el usuario este autentificado
    Indico que busque los asientos ocupados usando asiento,sala y horario y devuelva:
    1-El asiento que tiene qu ser igual al asiento, la fila y la sala con las filas y el asiento
    Y los horarios de esta manera compruebo que los asientos libres y ocupados de las diferentes salas de los difernetes horarios
    
    Si el asiento no esta ocupado muestro un formulario que lleva a entradas.store en el cual muestra los asientos libres y manda la informacion de
    sala mivue_id, filas, asientos y horarios para que cuando se seleccione un asiento de una fila de una película a una hora este pase a estar ocupado
    
    Si el asiento esta ocupado le muestro el asiento ocupado--->
    @foreach ($salas as $sala)
        <table class="Salas">
            <tr>
                @for ($asiento = 1; $asiento <= $sala['maximo_asientos']; $asiento++)
                    <td>
                        @if (Auth::check())
                            @php

                                $asientoOcupado = $asientosOcupados->first(function($asientoOcupadoTmp) use ($asiento, $sala, $horario) {
                                    return $asientoOcupadoTmp->asiento === $asiento &&
                                           $asientoOcupadoTmp->fila === $sala['filas'][$asiento - 1]['fila'] &&
                                           $asientoOcupadoTmp->horario === $horario;
                                });
                            @endphp
                            @if (!$asientoOcupado)
                                <form method="POST" action="{{ route('entradas.store', ['movieID' => $sala['movie_id'], 'fila' => $sala['filas'][$asiento - 1]['fila'], 'asiento' => $asiento, 'horario' => $horario]) }}">
                                    @csrf
                                    <button type="submit">
                                        <img src="{{ asset("imagenes/asientoLibre.png") }}" class="Asientos">
                                    </button>
                                </form>
                            @else
                                <img src="{{ asset("imagenes/asientoOcupado.png") }}" class="Asientos">
                            @endif
                        @else
                            <img src="{{ asset("imagenes/asientoLibre.png") }}" class="Asientos">
                        @endif
                    </td>
                @endfor
            </tr>
        </table>
    @endforeach
        <!--Simulación de pantalla de cine para saber donde esta-->
        <div class="pantallaCines">
        <h2>Pantalla</h2>
        </div>
</div>

@endsection
