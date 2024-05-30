<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'Comida';
    /*Proteccion de los datos que contiene la tabla comida*/
    protected $fillable = [
        'titulo',
        'imagen',
        'descripcion',
        'tipo',
        'precio',
    ];
    /*Creo la relación con la tabla ticket*/ 
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    /*Creo la relación con la tabla menbuy*/
    public function menbuy(){
        return $this->hasMany(MenBuy::class, 'menu_id');
    }


}
