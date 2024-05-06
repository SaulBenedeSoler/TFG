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
    $movie = Movie::findOrFail($movieID);
    $sala = Sala::where('movie_id', $movieID)->firstOrFail();
    return view('sala.show', compact('sala', 'movie'));
}


// FUNCION ENCARGADA DE GENERAR SALAS DE MANERA QUE CREA UN OBJETO MOVIES Y UN ARRAY SALAS, MEDIANTE EL FOREACH DEFINE LOS ASIENTOS
// Y FILAS MAXIMAS Y EL ESTADO DEL ASIENTO MEDIANTE UN ARRAYFILL Y BUSCA LA PELICULA MEDIANTE EL ID PARA PODE ASOCIARLA A ESA PELICULA
public function generarSala($movieID)
{
    $movie = Movie::findOrFail($movieID);
    $sala = Sala::where('movie_id', $movieID)->first();
    $max_filas = $sala->maximo_filas;
    $max_asientos = $sala->maximo_asientos;


    $salas = [];
    for ($filas = 1; $filas <= $max_filas; $filas++) {
        $filas_sala = [];
        for ($asientos = 1; $asientos <= $max_asientos; $asientos++) {
            $filas_sala[] = [
                'id' => $filas,
                'asiento' => $asientos,
                'estado_asiento' => true,
                'movie_id' => $movie->id,
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

