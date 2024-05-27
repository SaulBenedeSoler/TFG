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
        $prombuy = PromBuy::where('user_id', $userID)->get();

        return view('comp.show',  compact('userID', 'prombuy', 'userName'));


    }


    public function show(){
        $userID = Auth::id();
        $userName = Auth::user()->name;
        $prombuy = PromBuy::where('user_id', $userID)->get();
        
        return view('comp.show', compact('userID', 'prombuy', 'userName'));

    }

    public function delete($id){
        $userID = Auth::id();
        $promBuy = PromBuy::where('user_id', $userID)->findOrFail($id);
        $promBuy->delete();
    
        return view('index');
    }
    


}
