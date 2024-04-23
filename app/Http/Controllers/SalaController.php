<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    
    /*FUNCION USADA PARA VISUALIZAR LAS SALAS*/
    public function showSala(){ 
        $sala = Sala::first(); 
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
    public function marcarAsiento($asiento){
        $sala = session('sala');
        
        if ($asiento >= 1 && $asiento <= $sala['maximo_asientos']) {

            $sala['estado_asiento'][$asiento - 1] = 1;
            session(['sala' => $sala]);
    
 
            $salaModel = Sala::first();
            $salaModel->seats_state = json_encode($sala['estado_asiento']);
            $salaModel->save();
    
            return redirect()->back()->with('success', "El asiento $asiento ha sido marcado como ocupado.");
        } else {
            return redirect()->back()->with('error', 'El número de asiento seleccionado no es válido.');
        }
    }
    
    }
    
    
    
    
    
    





