<?php

namespace App\Models;
use App\Modles\Movie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    /*Protección de los datos de la tabla*/
    protected $fillable = [
        'nombre',
        'apellido',
        'movie_id',
    ];
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'director';
    /*RELACION N:N CON LA TABLA PELICULAS*/
    public function director(){
        return $this->belongsTo(Director::class);
    }
    
}
