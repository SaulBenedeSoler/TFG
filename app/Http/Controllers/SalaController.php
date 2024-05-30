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


/*Se encarga de generar las salas de cine
Recibe las variable de movieID y horario
Busca el id de la película
Busca la sala donde coincida el id de la película y los horarios
Se busca los asientos y filas de salas
Obtiene mediante la tabla ticket los asientos ocupados buscando la película y el horario concreto
Creo un array salas el cual se forma mediante:
La generacion de dos fors los cuales se encargan de generar los asientos y filas de las salas
Creo un array asientos el cual almacena la fila el asiento y el id de película
Almaceno todo en el array salas
Devuelvo la vista sala y le paso los datos correspondientes
*/
public function generarSala(int $movieID, string $horario)
{
    $movie = Movie::findOrFail($movieID);
    $sala = Sala::where('movie_id', $movieID)->where('horario', $horario)->firstOrFail();
    $maxFilas = $sala->maximo_filas;
    $maxAsientos = $sala->maximo_asientos;

    
    $asientosOcupados = Ticket::where('movie_id', $movieID)->where('horario', $horario)->get();
    
    $salas = [];
    for ($fila = 1; $fila <= $maxFilas; $fila++) {
        $asientos = [];
        for ($asiento = 1; $asiento <= $maxAsientos; $asiento++) {
            $asientos[] = [
                'fila' => $fila,
                'asiento' => $asiento,
                'movie_id' => $movie->id,
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
        'asientosOcupados' => $asientosOcupados,
        'horario' => $horario,
    ]);
}












}

