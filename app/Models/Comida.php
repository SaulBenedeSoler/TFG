<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'Comida';

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }


}
