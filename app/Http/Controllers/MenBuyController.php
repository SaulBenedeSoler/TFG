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

    public function show(){
        $userID = Auth::id();
        $userName = Auth::user()->name;
        $menbuy = MenBuy::with('comida')->where('user_id', $userID)->get();
    
        return view('menu.show', compact('userID', 'menbuy', 'userName'));

    }

    public function delete($id){
        $menbuy = MenBuy::find($id);
        $menbuy->delete();
        return redirect()->route('menu.show');
    }




}
