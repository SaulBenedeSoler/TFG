<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    use HasFactory;
    
    protected $table = 'promociones';


    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function prombuy(){
        return $this->hasMany(PromBuy::class);
    }


}
