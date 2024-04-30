@extends('master')

@section('content')

<div class="container">
<div class="row">
    <div class="container-fluid content-container">
        <div class="row">
            <div class="col-md-6">
                @foreach($ComidaList->chunk(4)[0] as $comida)
                <div class="card mb-4 comida-card">
                    <h1>{{ $comida->titulo }}</h1>
                    <div class="mt-5">
                        <a href="{{ route('comida.show', ['id' => $comida->id]) }}">
                            <img src="{{ url('imagenes/Menus') . '/' . $comida->imagen }}" class="menus">
                        </a>
                    </div>
                    <div class="mt-5">
                        <p>Descripción: {{ $comida->descripcion }}</p>
                        <p>Precio: {{ $comida->Precio }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach($ComidaList->chunk(4)[1] as $comida)
                <div class="card mb-4 comida-card">
                    <h1>{{ $comida->titulo }}</h1>
                    <div class="mt-5">
                        <a href="{{ route('comida.show', ['id' => $comida->id]) }}">
                            <img src="{{ url('imagenes/Menus') . '/' . $comida->imagen }}" class="menus">
                        </a>
                    </div>
                    <div class="mt-5">
                        <p>Descripción: {{ $comida->descripcion }}</p>
                        <p>Precio: {{ $comida->Precio }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
