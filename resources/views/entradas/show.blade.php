@extends('master')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h2>Entrada</h2>
                </div>
                <div class="card-body">

                    <p>Usuario: </p>
                    <p><b>{{$userName}}</b></p>

                    <p>Película</p>
                    <p><b>{{$movieName}}</b></p>

                    <p>Fila</p>
                    <p><b>{{$fila}}</b></p>

                    <p>Asiento:</p>
                    <p><b>{{$asiento}}</b></p>

                    <p>Sala: </p>
                    <p><b>{{$salaName}}</b></p>

                    <p>Precio:</p>
                    <p>{{$precio}}</p>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection