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
    
    public function store($promocionid){

        $userID = Auth::id();

        $prombuy = new PromBuy();
        $prombuy->promocion_id = $promocionid;
        $prombuy->user_id = $userID;
        $prombuy->save();
        $userID = Auth::id();
        $userName = Auth::user()->name;
        $menbuy = PromBuy::where('user_id', $userID)->get();
        $menuName = Promociones::findOrFail($promocionid)->titulo;
        $precio = Promociones::where('id', $promocionid)->firstOrFail()->Precio;
        $desc =Promociones::where('id', $promocionid)->firstOrFail()->descripcion;

        $imagen = Promociones::findOrFail($promocionid)->imagen;

        $IMAGEN = asset('imagenes/promociones/'. $imagen);

        return view('comp.promos',  compact('userID', 'menbuy', 'userName', 'menuName','precio','IMAGEN','desc'));


    }


    public function show(){
        $userID = Auth::id();
        $userName = Auth::user()->name;
        $prombuy = PromBuy::where('user_id', $userID)->get();
        
        return view('comp.show', compact('userID', 'prombuy', 'userName'));

    }

    public function delete($id){
        $prombuy = PromBuy::find($id);
        $prombuy->delete();
        return redirect()->route('prom.show');
    }


}
