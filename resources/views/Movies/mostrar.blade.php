@extends('master')

@section('content')
<!--Creo una tabla para meter en filas las peliculas y llamo a la base de datos mediante un for each en el que le indico que coga la imagen que coincida
con el id de la pelicula y divido la tabla en dos columnas de cuatro mediante el uso de la variable index declarada en el for each y lo uso para contar las 
iteraciones y con el if count movies le digo que si el numero no es divisible para 4 cree otra fila-->
    <div class="cent">
        <div class="centrado">
            <table class="tablaPelis">
                <tr class="tr">
                    @foreach($movies as $index => $movie)
                        <td class="mover">
                            <a href="{{ route('movies.info', ['id' => $movie->id]) }}">
                                <img src="{{ asset('imagenes/' . $movie->imagen) }}" class="imagenes">
                            </a>
                        </td>
                        @if(($index + 1) % 4 == 0)
                            </tr><tr class="tr">
                        @endif
                    @endforeach
                    @if(count($movies) % 4 != 0)
                        @for($i = 0; $i < 4 - (count($movies) % 4); $i++) 
                            <td></td>
                        @endfor
                    @endif
                </tr>
            </table>
        </div>
    </div>
@endsection
