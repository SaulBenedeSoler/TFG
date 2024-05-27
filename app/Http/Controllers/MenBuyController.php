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

        return view('menu.show',  compact('userID', 'menbuy', 'userName'));


    }

    public function show(){
        $userID = Auth::id();
        $userName = Auth::user()->name;
        $menbuy = MenBuy::where('user_id', $userID)->get();
        
        return view('menu.show', compact('userID', 'menbuy', 'userName'));

    }







}
