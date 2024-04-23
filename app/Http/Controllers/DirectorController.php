<?php

namespace App\Http\Controllers;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /*FUNCION LA CUAL SE ENCARHA DE COGER TODOS LOS DATOS ALMACENADOS EN LA BASE QUE ESTEN RELACIONADOS CON DIRECTOR*/
    public function index(){
        $director = Director::all();
        return view('director', ['director' => $director]);
    }
}
