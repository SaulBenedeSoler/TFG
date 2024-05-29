@extends('master')

@section('content')

<div class="intro">
    <div class="titPel">
        <h1>{{ $movie->title }}</h1>
    </div>

    <div class="Instrucciones">
        <p><b>Asiento libre</b></p>
        <img src="{{ asset("imagenes/asientoLibre.png") }}" class="ins">
        <p><b>Asiento Ocupado</b></p>
        <img src="{{ asset("imagenes/asientoOcupado.png") }}" class="ins">
    </div>

    @foreach ($salas as $sala)
        <table class="Salas">
            <tr>
                @for ($asiento = 1; $asiento <= $sala['maximo_asientos']; $asiento++)
                    <td>
                        @if (Auth::check())
                            @php
                                // Verifica si el asiento está ocupado para el horario específico
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

        <div class="pantallaCines">
        <h2>Pantalla</h2>
        </div>
</div>

@endsection
