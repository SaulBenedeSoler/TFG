<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    use HasFactory;
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'promociones';

    /*Creación de la relación con la tabla user*/
    public function user(){
        return $this->belongsToMany(User::class);
    }
   /*Creación de la relación con la tabla prombuy*/
    public function prombuy(){
        return $this->hasMany(PromBuy::class);
    }


}
