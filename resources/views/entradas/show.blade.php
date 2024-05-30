@extends('master')

@section('content')

    <!--Mediante diferentes divs creo la estructura del ticket que se motrara al adquirir uno-->
    <div class="ticket">

        <div class="ticketPrincipal">

            <div class="ticketHeader">
                <h2><b>{{$movieName}}</b></h2>
            </div>

            <div class="ticketUsuario">
                <div class="infoN">Usuario</div>

                <div class="infoNombre">
                    <p><b>{{$userName}}</b></p>
                </div>
            </div>

            <div class="infoAsiento">
                <div class="infoA">Asiento</div>

                <div class="infoasiento">
                    <p><b>{{$asiento}}</b></p>
                </div>
            </div>

            <div class="infoFila">
                <div class="infoF">
                    <p>Fila</p>
                </div>
                <div class="infofila">
                    <p><b>{{$fila}}</b></p>
                </div>
            </div>

            <div class="infoPrecio">

                <div class="infoP">
                    <p>Precio:</p>
                </div>

                <div class="infoprecio">
                    <p><b>{{$precio}}</b></p>
                </div>
            </div>

            <div class="inforH">

            <div class="infoH">
                <p>Horario: </p>
                </div>

            <div class="horario">
                <p><b>{{$horario}}</b></p>
            </div>

            </div>
  
        </div>
        <div class="codigo">
            <div class="qr">
                <img src="{{$QR}}">
            </div>
        </div>
      
      
    </div>


@endsection



