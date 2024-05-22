@extends('master')

@section('content')

  <h1>Mis Entradas</h1>

  <ul>
    @foreach ($tickets as $ticket)
      <li>{{ $ticket->movie->title }} - Fila {{ $ticket->fila }} - Asiento {{ $ticket->asiento }}</li>
    @endforeach
  </ul>
  
@endsection