<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\ticket;

class SalaController extends Controller
{

/*Se encarga de buscar el id de la pelicula y la sala que esta tiene asignada y mostrarla al usuario*/
public function showSala($movieID)
{
    $movie = Movie::findOrFail($movieID);
    $sala = Sala::where('movie_id', $movieID)->firstOrFail();
    $maxFilas = $sala->maximo_filas;

    return view('sala.show', compact('sala', 'movie', 'maxFilas'));
}


/*Se encarga de genera la sala meidiante la busqueda del id de la película y que coincida con el id que tiene en la tabla de salas.
Mediante el maxFila y maxAsientos recibe los datos de la sala.
Crea un array llamado sala
Mediante los bulces for se encarga de crear los asientos y las filas que contendran la sala*/
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
                'fila' => $fila,
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

