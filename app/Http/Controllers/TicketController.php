<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Movie;
use App\Models\Sala;
use App\Models\Comida;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ticketController extends Controller
{
    /*Esta función se ecarga de mostrar los datos del ticekt y lo hace de la siguiente manera
    Recibe la funcion el id mediante la llamada en una de las vistas
    LLama al ticket y le indica que busque el id del ticket y en caso de no econtrarlo que de fallo y lo almacena todo en la variable ticket
    LLama al ticket para obtener los datos de la pelicula y lo almacena todo en la variable movie
    Llama a la sala y le indica que busque la fila de manera que lo almacena todo en la variable fila
    Llama al asiento de la vairable sala para que busque el asiento y lo alamacena ne la variable asiento
    Llama a los datos del usuario y busca su id y lo almacena todo en la variable userID*/
    public function show($id){
        $ticket = Ticket::findOrFail($id);
        $movie = $ticket->movie;
        $sala = $ticket->sala;
        $fila = $sala->fila;
        $asiento = $sala->asiento;
        $userId = Auth::id();
        $horario = $sala->horario; 
        return view('entradas.show', compact('ticket', 'movie', 'sala', 'fila', 'userId'));
    }

    /*Esta funcion recibe mediante una vista la información de el id de la película, la fila y el asiento.
    De esta manera le indico que busque el id del usuario que a creado este ticket para asi poder asignarselo
    y que en la base de datos quede reflejado que usuario a adquirido ese ticket.
    Llamo mediante una variable a crear un nuevo ticket.
    A esta variable le idnico que la información mencionada anteriormente debe de asignarla a los diferentes datos
    que estan contenido en la tabla de tickets en la base de datos.
    Para mostrar más información se han implementado los siguientes variables con llamadas:
        1-userName que se encarga de realizar una llamada a los datos del usuario para mostrar su nombre en el ticket
        2-movieName que se encarga de realizar una llamada a los datos de la película para poder mostrar el titulo en el ticket
        3-precio que se encarga de realizar una llamada a los datos de la sala para poder mostrar el precio 
        4-QR que se encarga de realizar una llamada a los datos de movie y buscar mediante el id el qr*/
        public function store($movieID, $fila, $asiento, $horario)
        {
            $userId = Auth::id();
        
            $ticket = new Ticket();
            $ticket->movie_id = $movieID;
            $ticket->fila = $fila;
            $ticket->asiento = $asiento;
            $ticket->user_id = $userId;
            $ticket->horario = $horario;
            
            $ticket->save();
        
            $sala = Sala::where('movie_id', $movieID)->where('horario', $horario)->firstOrFail();
            $asientosOcupados = Ticket::where('movie_id', $movieID)->where('horario', $horario)->get();
            $sala->horario = $horario; 

            $sala->save();
         
            $userName = Auth::user()->name;
            $movieName = Movie::findOrFail($movieID)->title;
            $precio = Sala::where('movie_id', $movieID)->firstOrFail()->precio;
            $qr = Movie::findOrFail($movieID)->qr;

            $QR = asset('imagenes/'. $qr);
     
            return view('entradas.show', compact('ticket', 'fila', 'asiento', 'userName', 'movieName', 'precio', 'horario', 'QR'));
        }

        /*Funcion la cual se encarga de coger el id de usuario y mediante este buscar la pelicula y la sala guardada en ticket asociado al usuario 
        para mostrar los tickets que tiene el usuario*/ 
        public function ver(){
            $userID = Auth::id();
            $ticket = Ticket::with(['movie', 'sala'])->where('user_id', $userID)->get();
            return view('entradas.ver', compact('userID', 'ticket'));
        
        }
        

        /*Funcion para eliminar el ticket*/
        public function delete($id){
            $ticket = Ticket::find($id);
            $ticket->delete();
            return redirect()->route('entradas.ver');
        }


}