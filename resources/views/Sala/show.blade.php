@extends('master')

@section('content')

    <div class="intro">

        <div class="Instrucciones">
            <p><b>Asiento libre</b></p>
            <img src="{{ asset("imagenes/asientoLibre.png") }}" class="ins">
            <p><b>Asiento Ocupado</b></p>
            <img src="{{ asset("imagenes/asientoOcupado.png") }}" class="ins">
        </div>

        @foreach ($salas as $sala)
            <table class="Salas">
                @for ($fila = 1; $fila <= $sala['maximo_filas']; $fila++)
                    <tr>
                        @for ($asiento = 1; $asiento <= $sala['maximo_asientos']; $asiento++)
                            <td>
                                @if ($sala['filas'][$fila - 1]['asientos'][$asiento - 1]['estado_asiento'])
                                    @if (Auth::check())
                                        <a href="{{ route('entradas.store', ['movieID' => $sala['movie_id'], 'fila' => $fila, 'asiento' => $asiento]) }}">
                                            <img src="{{ asset("imagenes/asientoLibre.png") }}" class="Asientos">
                                        </a>
                                    @else
                                        O
                                    @endif
                                @else
                                    <img src="{{ asset("imagenes/asientoOcupado.png") }}" class="Asientos">
                                @endif
                            </td>
                        @endfor
                    </tr>
                @endfor
            </table>
        @endforeach

    </div>

@endsection