<?php

namespace App\Http\Controllers;
use App\Models\Promociones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromocionesController extends Controller
{
    /*Se encarga de llamar a la tabla Promociones de la base de datos y buscar todo el contenido para poder mostrarlo
    y almacenarlo en la variable PromoList*/
    public function index(){
        $PromoList = Promociones::all();
        return view('promociones.show', ['PromoList' => $PromoList]);
    }

    /*FUNCIONES ADMINISTRADOR*/

    /*Se encarga de mostrar al administrador todas las promociones mediante la llamada a la tabla de la base de datos
    y almacenarlo todo en la variable promociones*/
    public function showProm(){
        $promociones = Promociones::all();
        return view('promociones.adminshow', ['promociones' => $promociones]);
    }

    /*Se encarga de permitir crear al administrador nuevas promociones*/
    public function create(){
        return view('promociones.add');
    }

    /*Se encarga de buscar mediante id la promocione seleccionada por el administrador y mostrarla en el formulario de edición*/
    public function edit($id)
    {
        $promociones = Promociones::find($id);
        return view('promociones.form', ['promociones' => $promociones, 'tipo' => $promociones->tipo]);
    }

    /*Se encarga de validar todos los datos de la promocion seleccionada
    y permite buscar y modificar las promociones al administrador*/
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

    /*Se encarga de añadir o modificar promociones mediante la validación de datos y de crear una nueva promocion y insertar los datos de esta
    y alamcenarlo todo en la varibale promocion*/
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

    /*Se encarga de eliminar la promocion mediante la busqueda por id de esta en la tabla de la base de datos*/
    public function destroy($id){
        $promociones = Promociones::find($id);
        $promociones->delete();
        return redirect()->route('admin.index');
    }

}
