@extends('master')

@section('content')
    <div class="cent">
        <div class="centrado">
            <table class="tablaPelis" >
                <tr class="tr">
                    @php $counter = 0 @endphp
                    @foreach($movies as $movie)
                        <td class="mover">
                            <a href="{{ route('movies.info', ['id' => $movie->id]) }}">
                                <img src="{{ asset('imagenes/' . $movie->imagen) }}" class="imagenes">
                            </a>
                        </td>
                        @php $counter++ @endphp
                        @if($counter % 4 == 0)
                            </tr><tr class="tr">
                        @endif
                    @endforeach
                    @for($i = 0; $i < (4 - $counter % 4) % 4; $i++)
                        <td></td> <!-- Agrega celdas vacías para completar la última fila -->
                    @endfor
                </tr>
            </table>
        </div>
    </div>
@endsection
