<?php

namespace App\Models;
use App\Models\Actor;
use App\Models\Director;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    /*PROTEGO EL NOMBRE DE LA TABLA PARA NO TENER ERRORES CON LA BASE DE DATOS*/
    protected $table = 'movie';

    /*RELACION N:N CON LA TABLA DIRECTORES*/
    public function director(){
        return $this->belongsTo(Director::class);
    }
    
    /*RELACION N:N CON LA TABLA ACTORES*/
    public function actor(){
        return $this->belongsTo(Actor::class, 'actor_id');
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }



    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
