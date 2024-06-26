@extends('master')

@section('content')
    <!--Mediante un for each y varios divs creo una estructura
    Que se encarga de mostrar toods los tickets obtenidos por el usuario
    Creo un formulario que llama a la función de entradas.destroy para que el usario
    pueda cancelar la reserva-->
        @foreach ($ticket as $ticke)
            <div class="ticke">
                <div class="tickePrincipal">
                    <div class="tickeHeader">
                        <h2><b>{{ $ticke->movie->title }}</b></h2>
                    </div>
                    <div class="tickeInfo">
                        <div class="tickeDetalles">
                            <p>Fila: <b>{{ $ticke->fila }}</b></p>
                            <p>Asiento: <b>{{ $ticke->asiento }}</b></p>
                            <p>Horario: <b>{{ $ticke->horario }}</b></p>
                            <form action="{{ route('entradas.destroy', ['id' => $ticke->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Cancelar Reserva</button>
                            </form>
                        </div>

                        <div class="code">
                            <img class="Qr" src="{{ asset('imagenes/' . $ticke->movie->qr) }}">
                        </div>


                    </div>
                </div>
            </div>
        @endforeach

@endsection
