<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromBuy extends Model
{
    use HasFactory;

    protected $table = 'prombuy';

    public function promociones(){
        return $this->belongsTo(Promociones::class, 'promocion_id', 'id');
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }


    

}
