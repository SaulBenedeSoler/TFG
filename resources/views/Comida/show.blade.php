@extends('master')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
    <table class="table">
        <tr>
            @foreach($ComidaList as $comida)
            <td>
                <div class="card-w mb-4" class="tarjeta">
                    <h1>{{ $comida->titulo }}</h1>
                    <a href="{{ route('comida.show', ['id' => $comida->id]) }}">
                        <img src="{{ url('imagenes/Menus') . '/' . $comida->imagen }}" class="menus">
                    </a>
                    <div class="mt-3">
                        <p>Descripcion: {{ $comida->descripcion }}</p>
                        <p>Precio: {{ $comida->Precio }}</p>
                    </div>
                </div>
            </td>
            @if($loop->iteration % 3 == 0)
            </tr><tr>
            @endif
            @endforeach
        </tr>
    </table>
    </div>
</div>

@endsection
