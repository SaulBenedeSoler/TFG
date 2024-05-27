@extends('master')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Tus Tickets</h2>
            <ul>
                @foreach($tickets as $ticket)
                <li>
                    <p>Usuario ID: {{ $ticket->user_id }}</p>
                    <p>Nombre de la película: {{ $ticket->movie->name }}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection