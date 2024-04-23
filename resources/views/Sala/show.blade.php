@extends('master')


@section('content')

<div class="intro">

    <div class="Instrucciones">
    <p><b>Asiento libre</b></p>
    <img src="imagenes/asientoLibre.png" class="ins">
    <p><b>Asiento Ocupado</b></p>
    <img src="imagenes/asientoOcupado.png" class="ins">
    </div>

    @foreach ($salas as $sala)
    <h2>{{ $sala['movie_id'] }}</h2>
    <table class="Salas">
        @foreach ($sala['estado_asiento'] as $index => $estado)
            @if ($index % $sala['maximo_filas'] === 0)
                <tr>
            @endif
            <td>
                @if ($estado === 1)
                    <img src="imagenes/asientoOcupado.png" class="Asientos">
                @else
                    @if (Auth::check())
                        <form method="post" action="{{ route('marcar-asiento', ['asiento' => $index + 1]) }}">
                            @csrf
                            <button type="submit"><img src="imagenes/asientoLibre.png" class="Asientos"></button>
                        </form>
                    @else
                        O
                    @endif
                @endif
            </td>
            @if ($index % $sala['maximo_filas'] === $sala['maximo_filas'] - 1)
                </tr>
            @endif
        @endforeach
    </table>
@endforeach
    
    
  
      

  
@endsection