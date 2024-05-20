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
    public function show($id){
        $ticket = Ticket::findOrFail($id);
        $movie = $ticket->movie;
        $sala = $ticket->sala;
        $fila = $sala->fila;
        $asiento = $sala->asiento;
        $userId = Auth::id();

        return view('entradas.show', compact('ticket', 'movie', 'sala', 'fila', 'userId'));
    }

    public function store($movieID, $fila, $asiento)
    {

        $userId = Auth::id();


        $ticket = new Ticket();
        $ticket->movie_id = $movieID;
        $ticket->fila = $fila;
        $ticket->asiento = $asiento;
        $ticket->user_id = $userId;

        $userName = Auth::user()->name;
        $movieName = Movie::findOrFail($movieID)->title;
        $precio = Sala::findOrFail($movieID)->precio;

        $ticket->save();

        return view('entradas.show', compact('fila', 'asiento','userName', 'movieName', 'precio'));
    }
}