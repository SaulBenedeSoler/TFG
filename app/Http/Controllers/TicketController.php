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
        $movie = Movie::findOrFail($ticket->movie_id);
        $sala = $ticket->sala;
        $fila = $sala->fila;
        $asiento = $sala->asiento;



    return view('entradas.show', compact('ticket', 'movie', 'sala'));
    }
    public function store(Request $request)
    {
        $maxAsientos = (int) $request->input('max_asientos', 1);
        $asientoId = (int) $request->input('asiento');
        $salaId = (int) $request->input('sala_id');
    
        if ($maxAsientos === 0) {
            abort(400, 'El máximo de asientos no puede ser cero.');
        }
    
        $fila = floor($asientoId / $maxAsientos) ;
        $asiento = ($asientoId % $maxAsientos);
    
        $ticket = new Ticket([
            'movie_id' => $request->input('movieID'),
            'row' => $fila,
            'seat' => $asiento,
            'sala_id' => $salaId, 
        ]);
        dd($fila,$asiento);
        $ticket->save();
    
        return view('entradas.show', compact('fila', 'asiento'));
    }
    }

