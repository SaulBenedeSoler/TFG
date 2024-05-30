<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'sala';
    /*Protego los datos de la tabla*/
    protected $fillable = [
        'nombre',
        'maximo_asientos',
        'maximo_filas',
        'movie_id',
        'estado_asiento',
        'asientos',
        'horario',
    ];
    /*Creación de la relación con la tabla movie*/
    public function movie(){
    return $this->hasOne(Movie::class);
    }



}

