<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{


    public function show($id){

        $carrito = Carrito::findOrFail($id);

        $user = $carrito->user;
        $comida = $carrito->comida;
        $promocion = $carrito->promocion;

        return view('carrito.show', compact('carrito', 'user', 'comida', 'promocion'));
    }



    public function agregarAlCarrito(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'comida_id' => 'required|integer',
            'promocion_id' => 'required|integer',
        ]);

        $carrito = new Carrito();
        $carrito->user_id = $request->user_id;
        $carrito->comida_id = $request->comida_id;
        $carrito->promocion_id = $request->promocion_id;
        $carrito->save();

        return view('Carrito.show');
    }
    }

