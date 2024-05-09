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
public function generarSala($movieID)
{
    $movie = Movie::findOrFail($movieID);
    $sala = Sala::where('movie_id', $movieID)->firstOrFail();
    $max_filas = $sala->maximo_filas;
    $max_asientos = $sala->maximo_asientos;

    $salas = [];
    for ($fila = 1; $fila <= $max_filas; $fila++) {
        $filas_sala = [];
        for ($asiento = 1; $asiento <= $max_asientos; $asiento++) {

            $filas_sala[] = [
                'id' => $fila,
                'asiento' => $asiento,

                'movie_id' => $movie->id,
                'max_asientos' => $max_asientos, 
            ];
        }
        $salas[] = [
            'maximo_asientos' => $max_asientos,
            'movie_id' => $movie->id,
            'filas' => $filas_sala,
        ];
    }

    return view('sala.show', [
        'salas' => $salas,
        'movie' => $movie,
    ]);
}











}

