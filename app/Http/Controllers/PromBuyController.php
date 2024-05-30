<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Promociones;
use App\Models\User;
use App\Models\PromBuy;
use App\Models\ticket;
use Illuminate\Http\Request;

class PromBuyController extends Controller
{
    
    /*Se encarga de mostrar las promociones compradas por un usuario mediante la búsqueda del id de este
    en la base de datos, el nombre y la búsqued del id de la promoción adquirida
    buscando que coincida el id del usuario con el almacenado en la tabla prombuy
    Devuelve la vista y mediante el compact crea un array asociativo con los datos pasados.*/
    public function show(){
        $userID = Auth::id();
        $userName = Auth::user()->name;
        $prombuy = PromBuy::where('user_id', $userID)->get();
        
        return view('comp.show', compact('userID', 'prombuy', 'userName'));

    }

    /*Se encarga de recibir la id de la promocion.
    Buscar el id del usuario y lo almacena en la variable userID
    Crea una nueva promocionComprada y lo almacena en una variable
    En esa misma variable se almacena el id de la promocion y el id del usuario
    Se guarda la promoción
    Se busca el id y nombre del usuario mediante búsquedas en la base de datos
    Se busca la promoción que coincida con el id del usuario buscado anteriormente y almacenado en la tabla prombuy
    Se obtiene el nombre de la promocion mediante la busqueda en la base que coincida con el id
    Se obtiene el precio de la promocion mediante la busqueda en la base que coincida con el id
    Se obtiene la descripcion de la promocion mediante la busqueda en la base que coincida con el id
    Se obtiene la imagen de la promocion mediante la busqueda en la base que coincida con el id
    Se guarda la imagen y se busca esta en la carpeta de iamgenes
    Se muestra todo en la vista especificada y se usa el compact para crear un array asociativo
    el cual contenga todos los datos de la funcion*/
    public function store($promocionid){

        $userID = Auth::id();

        $prombuy = new PromBuy();
        $prombuy->promocion_id = $promocionid;
        $prombuy->user_id = $userID;
        $prombuy->save();
        $userID = Auth::id();
        $userName = Auth::user()->name;
        $prombuy = PromBuy::where('user_id', $userID)->get();
        $promName = Promociones::findOrFail($promocionid)->titulo;
        $precio = Promociones::where('id', $promocionid)->firstOrFail()->Precio;
        $desc =Promociones::where('id', $promocionid)->firstOrFail()->descripcion;

        $imagen = Promociones::findOrFail($promocionid)->imagen;

        $IMAGEN = asset('imagenes/promociones/'. $imagen);

        return view('comp.promos',  compact('userID', 'prombuy', 'userName', 'promName','precio','IMAGEN','desc'));


    }

    /*Se encarga de buscar mediante el id de la promocion comprada y eliminarla*/
    public function delete($id){
        $prombuy = PromBuy::find($id);
        $prombuy->delete();
        return redirect()->route('prom.show');
    }


}
