@extends('master')


@section('content')

<div class="intro">


    <h1>Room Map</h1>
    <p>Name: {{ $room->name }}</p>
    <p>Max Seats: {{ $room->max_seats }}</p>
    <p>Max Rows: {{ $room->max_rows }}</p>

    <h2>Seating Map</h2>
    <table border="1">
        @for ($i = 1; $i <= $room->max_rows; $i++)
            <tr>
                @for ($j = 1; $j <= $room->max_seats; $j++)
                    @if ($j % 4 == 0 && $j != 0)
                        @if ($i * 4 - 3 == $j)
                            @if ($j <= count($room->seats))
                                <td>X</td>
                            @else
                                <td>0</td>
                            @endif
                        @else
                            <td></td>
                        @endif
                    @else
                        @if ($i * 4 - 3 <= $j && $j <= $i * 4)
                            @if ($j <= count($room->seats))
                                <td>X</td>
                            @else
                                <td>0</td>
                            @endif
                        @else
                            <td></td>
                        @endif
                    @endif
                @endfor
            </tr>
        @endfor
    </table>

  
  
      

  
@endsection