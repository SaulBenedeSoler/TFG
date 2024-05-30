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

      /*FUNCIONES PARA EL ADMINISTRADOR*/
    
    /*Se encarga de llamar a toda la directores mediante el llamado a la tabla de la base de datos con el nombre de director
    y le indica que recoga todos los datos de la tabla*/
    public function adminDCshow(){
        $director = Director::all();
        return view('director.adminshow', ['director' => $director]);
    }

    /*Funcion encargada de crear nuevos directores*/
    public function create(){
        return view('director.add');
    }

    /*Se encarga mediante un request de
    validar los datos que se piden para poder crear los nuevos directores
    LLamar mediante la variable director a la tabla de director de la base de datos y crear un nuevo espacio en la tabla
    Añade mediante el metodo de validacion todos los datos necesarios y los almacena en la variable director
    Guarda esos datos*/
    public function store(Request $request){

        $validateData = $request->validate([

            'nombre' => 'required',
            'apellido' => 'required',
            'movie_id' => 'required',
        ]);

        $director = new director();
        $director->nombre = $validateData['nombre'];
        $director->apellido = $validateData['apellido'];
        $director->movie_id = $validateData['movie_id'];

        
        $director->save();

        return redirect()->route('director.adminshow', ['id'=> $director->id]);
    }

    /*Se encarga de buscar mediante el id de la director almacenada en la tbla director de la base de datos
    y permite editar los directores que se encuentren registrados*/
    public function edit($id){
        $director = director::find($id);
        return view('director.form', ['director' => $director]);
    }

    /*Se encarga de actualizar la director mediante la busqueda por id y almacena todos los datos en la variable director*/
    public function update($id, Request $request){
        $director = director::find($id);
        $director->nombre = $request->nombre;
        $director->apellido = $request->apellido;
        $director->movie_id = $request->movie_id;
        $director->save();
        return redirect()->route('director.adminshow');
    }

    /*Se encarga de buscar mediante la variable director en la tabla de la base de datos Comdida por id
    y de eliminarlo*/
    public function destroy($id){
        $director = director::find($id);
        $director->delete();
        return redirect()->route('director.adminshow');
    }




}
