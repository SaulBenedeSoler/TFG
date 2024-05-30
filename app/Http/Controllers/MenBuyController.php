<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PromBuy;
use App\Models\Comida;
use App\Models\MenBuy;
use Illuminate\Http\Request;

class MenBuyController extends Controller
{
       
    /*Se encarga de buscar el id del usuario el nombre y el menu adquirido mediante búsquedas en la base de datos
    y almacenando tood en variables.
    Redirige a la vista indicada y devuelve la información mediante el comando compact que crea un array asociativo con los datos
    indicados*/
    public function show(){
        $userID = Auth::id();
        $userName = Auth::user()->name;
        $menbuy = MenBuy::with('comida')->where('user_id', $userID)->get();
    
        return view('menu.show', compact('userID', 'menbuy', 'userName'));

    }



    /*Esta función se encarga de recibir el id del menu y mediante la obtención del id del usuario 
    el cual es almacenado en la variable userID.
    Con la variable menbuy se encarga de crear un nuevo objeto en la base de datos
    Se le añade a esta variable el id del menu, y el id del usuario
    Se obtiene el nombre del usuarioo el cual es almacenado en la variable userName
    Se obtiene el menu adquirido pro el usuario mediante la busqueda en la base de datos
    de todos los objetos con el user id
    Se obtiene el nombre del menu mediante la búsqueda en la tabla Comida que coincida con el id del menu que a obtenido
    antes y coge el titulo de este.
    Obtiene el precio del menu de la tabla comida mediante la búsqueda del id
    Obtiene la descripcion del menu mediante la búsqueda de la id que coincida con la recibida
    Obtiene la imagen del menu mediante la búsqueda por id
    Almacena laimagen del menu
    Devuelve la información mediante el compact creando un array asociativo a raiz de las variables obtenidas y muestra la vista indicada*/ 
    public function store($menuid){

        $userID = Auth::id();

        $menbuy = new MenBuy();
        $menbuy->menu_id = $menuid;
        $menbuy->user_id = $userID;
        $menbuy->save();

        $userID = Auth::id();
        $userName = Auth::user()->name;
        $menbuy = MenBuy::where('user_id', $userID)->get();
        $menuName = Comida::findOrFail($menuid)->titulo;
        $precio = Comida::where('id', $menuid)->firstOrFail()->Precio;
        $desc =Comida::where('id', $menuid)->firstOrFail()->descripcion;

        $imagen = Comida::findOrFail($menuid)->imagen;

        $IMAGEN = asset('imagenes/Menus/'. $imagen);

        return view('menu.menus',  compact('userID', 'menbuy', 'userName', 'menuName','precio','IMAGEN','desc'));


    }

    /*Se encarga de buscar mediante el id del menu comprado y eliminarlo*/
    public function delete($id){
        $menbuy = MenBuy::find($id);
        $menbuy->delete();
        return redirect()->route('menu.show');
    }




}
