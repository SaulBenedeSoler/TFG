<?php

namespace App\Http\Controllers;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActoresController extends Controller
{
    /*FUNCION LA CUAL SIRVE PARA MOSTRAR LOS ACTORES*/
    public function index()
    {
        $actor = Actor::all();
        return view('actor', ['actor' => $actor]);
    }
}
