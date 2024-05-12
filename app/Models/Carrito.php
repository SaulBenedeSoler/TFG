<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    public function comida()
    {
        return $this->belongsTo(Comida::class);
    }

    public function promocion()
    {
        return $this->belongsTo(Promociones::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
