<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromBuy extends Model
{
    use HasFactory;
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'prombuy';
        /*Proteccion de los datos que contiene la tabla prombuy*/
    protected $fillable = [
        'promocion_id',
        'user_id',
    ];

    /*Creo la relación con la tabla promociones*/ 
    public function promociones(){
        return $this->belongsTo(Promociones::class, 'promocion_id', 'id');
    }
    /*Creo la relación con la tabla users*/ 
    public function users(){
        return $this->belongsToMany(User::class);
    }


    

}
