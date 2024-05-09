<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Movie;
use App\Models\Sala;
use App\Models\Comida;

class ticketController extends Controller
{
    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);
        $movie = $ticket->movie;
        $sala = $ticket->sala;
        $fila = $sala->fila;
        $asiento = $sala->asiento;
    
        return view('entradas.show', compact('ticket', 'movie', 'sala', 'fila'));
    }

    public function store($movieID, $fila, $asiento)
    {
        $maxAsientos = 1;
        $salaId = $fila;
    
        $ticket = new Ticket([
            'movie_id' => $movieID,
            'fila_id' => $fila,
            'sala_id' => $salaId,
        ]);

        $ticket->save();
    
        return view('comida.show',  ['id' => $ticket->id]);
    }

    public function create(Request $request, Ticket $ticket){
    $menu = Comida::findOrFail($request->menu_id);

    $ticket->menu()->associate($menu);
    $ticket->save();

    return view('entradas.create', compact('ticket'));
    }
}
