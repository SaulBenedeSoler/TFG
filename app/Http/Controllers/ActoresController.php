<?php

namespace App\Http\Controllers;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActoresController extends Controller
{
    /*Funcion que sirve para obtener los datos de los actores mediante
    la llamada a la tabla Actor de la base de datos y lo almacena todo en la variable actor*/
    public function index()
    {
        $actor = Actor::all();
        return view('actor', ['actor' => $actor]);
    }
}
