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

    /*FUNCIONES PARA EL ADMINISTRADOR*/
    
    /*Se encarga de llamar a toda la actores mediante el llamado a la tabla de la base de datos con el nombre de actor
    y le indica que recoga todos los datos de la tabla*/
    public function adminAcshow(){
        $actor = Actor::all();
        return view('actor.adminshow', ['actor' => $actor]);
    }

    /*Funcion encargada de crear nuevos actores*/
    public function create(){
        return view('actor.add');
    }

    /*Se encarga mediante un request de
    validar los datos que se piden para poder crear los nuevos menis
    LLamar mediante la variable actor a la tabla de actor de la base de datos y crear un nuevo espacio en la tabla
    Añade mediante el metodo de validacion todos los datos necesarios y los almacena en la variable actor
    Guarda esos datos*/
    public function store(Request $request){

        $validateData = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'movie_id' => 'required',
        ]);
        
        $actor = new actor();
        $actor->nombre = $validateData['nombre'];
        $actor->apellido = $validateData['apellido'];
        $actor->movie_id = $validateData['movie_id'];

        
        $actor->save();

        return redirect()->route('actor.adminshow', ['id'=>$actor->id]);
    }

    /*Se encarga de buscar mediante el id de la actor almacenada en la tbla actor de la base de datos
    y permite editar los menus que se encuentren registrados*/
    public function edit($id){
        $actor = Actor::find($id);
        return view('actor.form', ['actor' => $actor]);
    }

    /*Se encarga de actualizar la actor mediante la busqueda por id y almacena todos los datos en la variable actor*/
    public function update($id, Request $request){
        $actor = Actor::find($id);
        $actor->nombre = $request->nombre;
        $actor->apellido = $request->apellido;
        $actor->movie_id = $request->movie_id;
        $actor->save();
        return redirect()->route('admin.index');
    }

    /*Se encarga de buscar mediante la variable actor en la tabla de la base de datos Comdida por id
    y de eliminarlo*/
    public function destroy($id){
        $actor = actor::find($id);
        $actor->delete();
        return redirect()->route('admin.index');
    }


}
