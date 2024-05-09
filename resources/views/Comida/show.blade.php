@extends('master')

@section('content')

<div class="container">

    <div class="row">
    @foreach($comidaList as $comida)
    <div class="col-md-4">
    <div class="card- comida-card">
        <h2 class="titulo">{{$comida->titulo}}</h2>
         <img src="{{ url('imagenes/Menus') . '/' . $comida->imagen }}" class="menus">
        <p>Descripcion: {{$comida->descripcion}}</p>
        <p>Precio: {{$comida->Precio}}
    @if (Auth::check())
            <form method="POST" action="{{ route('comida.select') }}">
                @csrf
                <input type="hidden" name="menu_id" value="{{ $comida->id }}">
                <button type="submit">Seleccionar</button>
            </form>
        @endif
    </div>

    </div>
    @endforeach
    </div>

</div>

@endsection