<?php

namespace App\Http\Controllers;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /*Se encarga de buscar todos los datos de la tabla Director de la base de datos y almacenarlo en la variable
    director para poder mostrarlo*/
    public function index(){
        $director = Director::all();
        return view('director', ['director' => $director]);
    }
}
