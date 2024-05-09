<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function index(){
        $comidaList = Comida::all();
        return view('comida.show', ['comidaList' => $comidaList]); 
    }
    

    public function show($id){
        $comida = Comida::findOrFail($id);
        return view('comida.show', ['comida' => $comida]);
    }


    /*FUNCIONES PARA EL ADMINISTRADOR*/

    /*FUNCION LA CUAL RECOGE TODO LO ALMACENADO EN LA TABLA DE COMIDA MEDIANTE LA VARIABLE comida Y SE ENCARGA DE DEVOLVER LA VISTA DE ADMINISTRADOR Y MOSTRAR
    LOS DIFERENTES MENUS*/
    public function adminComshow(){
        $comida = Comida::all();
        return view('comida.adminshow', ['comida' => $comida]);
    }

    /*FUNCION LA CUAL SE ENCARGA DE CREAR MENUS Y REDIRIGE A LA VISTA DE COMIDA ADD*/
    public function create(){
        return view('comida.add');
    }

    /*FUNCION LA CUAL SIRVE PARA EL FORMULARIO PARA AÑADIR O MODIFICAR LOS MENUS Y QUE PIDE COMO OBLIGATORIO LOS DATOS QUE SE ENCUENTRAN GUARDADOS
    EN LA BASE DE DATOS Y CREA UN NUEVO OBJETO COMIDA MEDIANTE LA VARIABLE comida Y VALIDA LOS DATOS MEDIANTE LA VARIABLE validateData, LUEGO SE
    ENCARGA DE GUARDAS LA VARIABLE Y NOS REDIRIGE A LA VISTA DE MENUS DEL ADMINISTRADOR Y COGE LOS MENUS MEDIANTE LA ID*/
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

    /*FUNCION LA CUAL SIRVE PARA EDITAR LOS MENUS Y FUNCIONA DE MANERA QUE MEDIANTE LA VRIABLE COGEMOS POR LA ID TODOS LOS OBJETOS CONTENIDOS EN LA TABLA
    DE COMIDA Y DEVOLVEMOS LA VISTA COMODA.FORM Y LOS OBJETOS DE COMIDA*/
    public function edit($id){
        $comida = Comida::find($id);
        return view('comida.form', ['comida' => $comida]);
    }

    /*FUNCION LA CUAL SIRVE PARA ACTUALIZAR LA TABLA COMIDA Y SE ENCARGA DE BUSCAR MEDIANTE LA ID TODOS LOS DATOS DE LA TABLA DE COMIDA, GUARDARLOS Y MOSTRARLOS Y 
    REIRIGE AL INDEX DEL AMDINISTRADOR*/
    public function update($id, Request $request){
        $comida = Comida::find($id);
        $comida->titulo = $request->titulo;
        $comida->imagen = $request->imagen;
        $comida->descripcion = $request->descripcion;
        $comida->precio = $request->precio;
        $comida->save();
        return redirect()->route('admin.index');
    }

    /*FUNCION LA CUAL SIRVE PARA ELIMINAR MENUS Y SE ENCARGA DE BUSCAR MEDIANTE EL ID EL MENU QUE QUEREMOS ELIMINAR*/
    public function destroy($id){
        $comida = Comida::find($id);
        $comida->delete();
        return redirect()->route('admin.index');
    }




}
