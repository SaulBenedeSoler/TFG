<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_Solo extends Model
{
    use HasFactory;

    public function comida()
    {
        return $this->belongsTo(Comida::class);
    }
}
