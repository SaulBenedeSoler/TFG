<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    
    /*FUNCION USADA PARA VISUALIZAR LAS SALAS*/
    public function show($movieId)
    {
        $sala = Sala::where('movie_id', $movieId)->first();
        
        if (!$sala) {
          
            return redirect()->route('home')->with('error', 'No se encontró una sala para esta película.');
        }
        
        return view('sala.show', compact('sala'));
    }
    
    
    

    /*FUNCION ENCARGADA DE GENERAR SALAS DE MANERA QUE CREA UN OBJETO MOVIES Y UN ARRAY SALAS, MEDIANTE EL FOREACH DEFINE LOS ASIENTOS
    Y FILAS MAXIMAS Y EL ESTADO DEL ASIENTO MEDIANTE UN ARRAYFILL Y BUSCA LA PELICULA MEDIANTE EL ID PARA PODE ASOCIARLA A ESA PELICULA*/
    public function generarSala(){
            $movies = Movie::all();
            $salas = [];
            foreach ($movies as $movie) {
                $sala = [
                    'maximo_asientos' => 20, 
                    'maximo_filas' => 4, 
                    'movie_id' => $movie->id,                    
                    'estado_asiento' => array_fill(0, 20, 0)
                ];
                $salas[] = $sala;
            }
            return view('Sala.show', compact('salas'));
        }

    /*FUNCION INCOMPLETA FINALIZAR EN EL 2ºSPRINT*/
    public function marcarAsiento($salaId, $asiento){
        // Obtenemos la sala de la base de datos
        $sala = Sala::findOrFail($salaId);
        
        // Verificamos si la sala existe y si el asiento seleccionado es válido
        if ($sala && $asiento >= 1 && $asiento <= $sala->maximo_asientos) {
            // Marcamos el asiento como ocupado
            $estado_asientos = json_decode($sala->seats_state, true);
            $estado_asientos[$asiento - 1] = 1;
            $sala->seats_state = json_encode($estado_asientos);
            
            // Guardamos los cambios en la base de datos
            $sala->save();
            
            return redirect()->back()->with('success', "El asiento $asiento ha sido marcado como ocupado.");
        } else {
            return redirect()->back()->with('error', 'El número de asiento seleccionado no es válido.');
        }
    }
    

    


    }
    
    
    
    
    
    





