@extends('master')

@section('content')
    <div class="cent">
        <div class="centrado">
            <table class="tablaPelis">
                @foreach($movies as $movie)
                    <td>
                        <a href="{{ route('movies.info', ['id' => $movie->id]) }}">
                            <img src="{{ asset('imagenes/'. $movie->imagen) }}" class="imagenes">
                        </a>
                    </td>
                    @if($loop->iteration % 4 == 0)
                        </tr><tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
@endsection