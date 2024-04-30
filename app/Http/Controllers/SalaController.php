<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{

// FUNCION USADA PARA VISUALIZAR LAS SALAS
public function showSala($movieID)
{
    $movie = Movie::with('sala')->get();
    $sala = Sala::where('movie_id', $movieID)->first();
    return view('sala.show', compact('sala'));
}

// FUNCION ENCARGADA DE GENERAR SALAS DE MANERA QUE CREA UN OBJETO MOVIES Y UN ARRAY SALAS, MEDIANTE EL FOREACH DEFINE LOS ASIENTOS
// Y FILAS MAXIMAS Y EL ESTADO DEL ASIENTO MEDIANTE UN ARRAYFILL Y BUSCA LA PELICULA MEDIANTE EL ID PARA PODE ASOCIARLA A ESA PELICULA
public function generarSala($movieID)
{
    $movies = Movie::all();
    $salas = [];
    foreach ($movies as $movie) {
        if ($movie->id == $movieID) {
            $sala = [
                'maximo_asientos' => 20, 
                'maximo_filas' => 4, 
                'movie_id' => $movie->id,                    
                'estado_asiento' => array_fill(0, 20, 0)
            ];
            $salas[] = $sala;
            break;
        }
    }
    return view('sala.show', compact('salas'));
}

// FUNCION INCOMPLETA FINALIZAR EN EL 2ºSPRINT
public function marcarAsiento($asiento, $movieID)
{

    $sala = Sala::where('movie_id', $movieID)->first();

    if ($sala->estado_asiento[$asiento - 1] === 1) {
        return redirect()->back()->with('Error', 'El asiento ya esta ocupado');
    }

    $sala->estado_asiento[$asiento - 1] = 1;
    $sala->save();

    return redirect()->route('show-sala', ['movieID' => $movieID])->with('Ocupado', 'El asiento ha sido marcado correctamente');
}

}

