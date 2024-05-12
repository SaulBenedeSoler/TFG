<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\ticket;

class SalaController extends Controller
{

// FUNCION USADA PARA VISUALIZAR LAS SALAS
public function showSala($movieID)
{
    $movie = Movie::findOrFail($movieID);
    $sala = Sala::where('movie_id', $movieID)->firstOrFail();
    return view('sala.show', compact('sala', 'movie'));
}


// FUNCION ENCARGADA DE GENERAR SALAS DE MANERA QUE CREA UN OBJETO MOVIES Y UN ARRAY SALAS, MEDIANTE EL FOREACH DEFINE LOS ASIENTOS
// Y FILAS MAXIMAS Y EL ESTADO DEL ASIENTO MEDIANTE UN ARRAYFILL Y BUSCA LA PELICULA MEDIANTE EL ID PARA PODE ASOCIARLA A ESA PELICULA
public function generarSala(int $movieID)
{
    $movie = Movie::findOrFail($movieID);
    $sala = Sala::where('movie_id', $movieID)->firstOrFail();
    $maxFilas = $sala->maximo_filas;
    $maxAsientos = $sala->maximo_asientos;

    $salas = [];
    for ($fila = 1; $fila <= $maxFilas; $fila++) {
        $asientos = [];
        for ($asiento = 1; $asiento <= $maxAsientos; $asiento++) {
            $asientos[] = [
                'id' => $fila,
                'asiento' => $asiento,
                'movie_id' => $movie->id,
                'max_asientos' => $maxAsientos,
            ];
        }
        $salas[] = [
            'maximo_asientos' => $maxAsientos,
            'movie_id' => $movie->id,
            'filas' => $asientos,
        ];
    }

    return view('sala.show', [
        'salas' => $salas,
        'movie' => $movie,
    ]);
}











}

