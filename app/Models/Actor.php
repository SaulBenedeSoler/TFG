<?php

namespace App\Models;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    /*Protección de los datos que contiene actores*/
    protected $fillable = [
        'nombre',
        'apellido',
        'movie_id',
    ];
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'actor';
    /*RELACION N:N CON LA TABLA PELICULAS*/
    public function movies(){
        return $this->belongsToMany('App\Models\Movie');
    }
}
