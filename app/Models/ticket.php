<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'ticket';
    /*Proteccion de los datos que contiene la tabla ticket*/
    protected $fillable = [
        'movie_id', 
        'sala_id', 
        'asiento', 
        'user_id'
    ];

    /*Creación de la relación con la tabla movie*/
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
    /*Creación de la relación con la tabla sala*/
    public function sala(){
        return $this->belongsTo(Sala::class);
    }
    /*Creación de la relación con la tabla usuarios*/
    public function users(){
        return $this->belongsToMany(User::class);
    }


}
