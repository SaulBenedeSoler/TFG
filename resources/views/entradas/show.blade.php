@extends('master')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h2>Ticket Details</h2>
                </div>
                <div class="card-body">
                    <p>Movie: {{$ticket->movie->title}}</p>
                    <p>Sala: {{$ticket->sala->nombre}}</p>
                    <p>Fila: {{$ticket->fila->nombre}}</p>
                    <p>Asiento: {{$ticket->asiento}}</p>
                    <p>Menu: {{$ticket->menu->titulo}}</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection