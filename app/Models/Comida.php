<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'Comida';

    protected $fillable = [
        'titulo',
        'imagen',
        'descripcion',
        'tipo',
        'precio',
    ];

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

    public function carritos()
    {
        return $this->hasMany(Carrito::class);
    }

    public function menbuy(){
        return $this->hasMany(MenBuy::class, 'menu_id');
    }


}
