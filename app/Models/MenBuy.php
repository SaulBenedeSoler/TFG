<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenBuy extends Model
{
    use HasFactory;

    protected $table = 'menbuy';
    
    protected $fillable = [
        'menu_id',
        'user_id',
    ];


    public function users(){
        return $this->belongsToMany(User::class);
    }

    
    public function comida(){
        return $this->belongsTo(Comida::class, 'menu_id');
    }

}
