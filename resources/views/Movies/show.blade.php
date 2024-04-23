@extends('master')

@section('content')

<div class="container-fluid text-center mt-5">
    <div class="row justify-content-evenly">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card border text-white bg-danger border-dark rounded" style="max-width: 18rem; margin-bottom: 20px;">
                <div class="card-header"><span class="semana">Semana</span> <span class="numeros">1</span></div>
                <div class="card-body">
                    <p class="card-text">Haz click en el botón para ir a ver las películas que se emiten en la semana 1</p>
                    <button class="boton"><a href="{{ route('Movies.mostrar', ['numeroSemana' => 1]) }}" class="enla">Semana 1</a></button>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card text-white bg-danger border border-dark rounded" style="max-width: 18rem; margin-bottom: 20px;">
                <div class="card-header"><span class="semana">Semana</span> <span class="numeros">2</span></div>
                <div class="card-body">
                    <p class="card-text">Haz click en el botón para ir a ver las películas que se emiten en la semana 2</p>
                    <button class="boton"><a href="{{ route('Movies.mostrar', ['numeroSemana' => 2]) }}" class="enla">Semana 2</a></button>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card text-white bg-danger border border-dark rounded" style="max-width: 18rem; margin-bottom: 20px;">
                <div class="card-header"><span class="semana">Semana</span> <span class="numeros">3</span></div>
                <div class="card-body">
                    <p class="card-text">Haz click en el botón para ir a ver las películas que se emiten en la semana 3</p>
                    <button class="boton"><a href="{{ route('Movies.mostrar', ['numeroSemana' => 3]) }}" class="enla">Semana 3</a></button>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card text-white bg-danger border border-dark rounded" style="max-width: 18rem; margin-bottom: 20px;">
                <div class="card-header"><span class="semana">Semana</span> <span class="numeros">4</span></div>
                <div class="card-body">
                    <p class="card-text">Haz click en el botón para ir a ver las películas que se emiten en la semana 4</p>
                    <button class="boton"><a href="{{ route('Movies.mostrar', ['numeroSemana' => 4]) }}" class="enla">Semana 4</a></button>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
