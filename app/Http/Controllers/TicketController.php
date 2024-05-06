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
            'asiento' => $asiento,
            'sala_id' => $salaId,
        ]);

        $ticket->save();
    
        return view('entradas.show', compact('fila', 'asiento'));
    }
    }

