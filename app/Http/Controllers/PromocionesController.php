<?php

namespace App\Http\Controllers;
use App\Models\Promociones;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{
    /*FUNCION QUE SIRVE PARA MOSTRAR TODAS LAS PROMOCIONES EN LA BASE DE DATOS AL USUARIO*/
    public function index(){
        $PromoList = Promociones::all();
        return view('promociones.show', ['PromoList' => $PromoList]);
    }



    /*FUNCIONES ADMINISTRADOR*/

    /*FUNCION QUE SIRVE PARA VISUALIZAR TODAS LAS PROMOCIONES GUARDADAS EN LA BASE DE DATOS*/
    public function showProm(){
        $promociones = Promociones::all();
        return view('promociones.adminshow', ['promociones' => $promociones]);
    }

    /*FUNCION LA CUAL SE ENCARGA DE CREAR MENUS Y REDIRIGE A LA VISTA DE PROMOCIONES CREAR*/
    public function create(){
        return view('promociones.add');
    }

    /*FUNCION LA CUAL SIRVE PARA EDITAR LAS PROMOCIONES Y FUNCIONA DE MANERA QUE MEDIANTE LA VRIABLE COGEMOS POR LA ID TODOS LOS OBJETOS CONTENIDOS EN LA TABLA
    DE PROMOCIONES Y DEVOLVEMOS LA VISTA PROMOCIONES.FORM Y LOS OBJETOS DE PROMOCIONES*/
    public function edit($id)
    {
        $promociones = Promociones::find($id);
        return view('promociones.form', ['promociones' => $promociones, 'tipo' => $promociones->tipo]);
    }

    /*FUNCION LA CUAL SIRVE PARA ACTUALIZAR LA TABLA PROMOCIONES Y SE ENCARGA DE BUSCAR MEDIANTE LA ID TODOS LOS DATOS DE LA TABLA DE PROMOCIONES,
     GUARDARLOS Y MOSTRARLOS Y REDIRIGE AL INDEX DEL AMDINISTRADOR*/
     public function update($id, Request $request)
     {
         $validatedData = $request->validate([
             'titulo' => 'required',
             'descripcion' => 'required',
             'imagen' => 'required',
             'precio' => 'required',
             'tipo' => 'required|in:anual,mensual,semanal',
         ]);
     
         $promociones = Promociones::find($id);
         $promociones->titulo = $validatedData['titulo'];
         $promociones->descripcion = $validatedData['descripcion'];
         $promociones->imagen = $validatedData['imagen'];
         $promociones->precio = $validatedData['precio'];
         $promociones->tipo = $validatedData['tipo'];
         $promociones->save();
     
         return redirect()->route('admin.index');
     }

    /*FUNCION LA CUAL SIRVE PARA EL FORMULARIO PARA AÑADIR O MODIFICAR LAS PROMOCIONES Y QUE PIDE COMO OBLIGATORIO LOS DATOS QUE SE ENCUENTRAN GUARDADOS
    EN LA BASE DE DATOS Y CREA UN NUEVO OBJETO PROMOCIONES MEDIANTE LA VARIABLE PROMOCIONES Y VALIDA LOS DATOS MEDIANTE LA VARIABLE validateData, LUEGO SE
    ENCARGA DE GUARDAS LA VARIABLE Y NOS REDIRIGE A LA VISTA DE INDEX DEL ADMINISTRADOR Y COGE LAS PROMOCIONES MEDIANTE LA ID*/
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'precio' => 'required',
            'tipo' => 'required|in:anual,mensual,semanal',
        ]);
    
        $promocion = new Promociones();
        $promocion->titulo = $validatedData['titulo'];
        $promocion->descripcion = $validatedData['descripcion'];
        $promocion->imagen = $validatedData['imagen'];
        $promocion->precio = $validatedData['precio'];
        $promocion->tipo = $validatedData['tipo'];
        $promocion->save();
    
        return redirect()->route('promociones.adminshow', ['id' => $promocion->id]);
    }

    /*FUNCION LA CUAL SIRVE PARA ELIMINAR PROMOCIONES Y SE ENCARGA DE BUSCAR MEDIANTE EL ID LA PROMOCION QUE QUEREMOS ELIMINAR*/
    public function destroy($id){
        $promociones = Promociones::find($id);
        $promociones->delete();
        return redirect()->route('admin.index');
    }

}
