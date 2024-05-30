<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    /*Se encarga de llamar mediante la variable comidaList
    a todos los datos recogido en la tabla de la base de datos que 
    se encuentren dentro de la tabla Comida*/   
    public function index(){
        $comidaList = Comida::all();
        return view('comida.show', ['comidaList' => $comidaList]); 
    }
    
    /*Se encrga de mostrar mediante id todos los datos de los diferentes menus
    mediante la variable comida*/
    public function show($id){
        $comida = Comida::findOrFail($id);
        return view('comida.show', ['comida' => $comida]);
    }


    /*FUNCIONES PARA EL ADMINISTRADOR*/


    /*Se encarga de llamar a toda la comida mediante el llamado a la tabla de la base de datos con el nombre de Comida
    y le indica que recoga todos los datos de la tabla*/
    public function adminComshow(){
        $comida = Comida::all();
        return view('comida.adminshow', ['comida' => $comida]);
    }

    /*Funcion encargada de crear nuevos menus de comida*/
    public function create(){
        return view('comida.add');
    }


    /*Se encarga mediante un request de
    validar los datos que se piden para poder crear los nuevos menis
    LLamar mediante la variable comida a la tabla de Comida de la base de datos y crear un nuevo espacio en la tabla
    Añade mediante el metodo de validacion todos los datos necesarios y los almacena en la variable comida
    Guarda esos datos*/
    public function store(Request $request){

        $validateData = $request->validate([

            'titulo' => 'required',
            'imagen' => 'required',
            'descripcion' => 'required',
            'precio' => 'required'
        ]);

        $comida = new comida();
        $comida->titulo = $validateData['titulo'];
        $comida->imagen = $validateData['imagen'];
        $comida->descripcion = $validateData['descripcion'];
        $comida->precio = $validateData['precio'];
        
        $comida->save();

        return redirect()->route('comida.adminComshow', ['id'=> $comida->id]);
    }

    /*Se encarga de buscar mediante el id de la comida almacenada en la tbla Comida de la base de datos
    y permite editar los menus que se encuentren registrados*/
    public function edit($id){
        $comida = Comida::find($id);
        return view('comida.form', ['comida' => $comida]);
    }

    /*Se encarga de actualizar la comida mediante la busqueda por id y almacena todos los datos en la variable comida*/
    public function update($id, Request $request){
        $comida = Comida::find($id);
        $comida->titulo = $request->titulo;
        $comida->imagen = $request->imagen;
        $comida->descripcion = $request->descripcion;
        $comida->precio = $request->precio;
        $comida->save();
        return redirect()->route('comida.adminComshow');
    }

    /*Se encarga de buscar mediante la variable comida en la tabla de la base de datos Comdida por id
    y de eliminarlo*/
    public function destroy($id){
        $comida = Comida::find($id);
        $comida->delete();
        return redirect()->route('comida.adminComshow');
    }




}
