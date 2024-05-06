@extends('master')

@section('content')

<h1>Entrada</h1>

<table class="table">
    <tbody>

        <tr>
            <th>Fila:</th>
            <td>{{ $fila }}</td>
        </tr>
        <tr>
            <th>Asiento:</th>
            <td>{{ $asiento }}</td>
        </tr>
    </tbody>
</table>

@endsection