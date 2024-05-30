<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenBuy extends Model
{
    use HasFactory;
    /*Proteccion del nombre de la tabla*/
    protected $table = 'menbuy';
    /*Protección de los datos de la tabla*/
    protected $fillable = [
        'menu_id',
        'user_id',
    ];
    /*Creación de la relacion con la tabla users*/
    public function users(){
        return $this->belongsToMany(User::class);
    }
    /*Creación de la relacion con la tabla comida*/
    public function comida(){
        return $this->belongsTo(Comida::class, 'menu_id');
    }

}
