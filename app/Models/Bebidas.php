<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebidas extends Model
{
    use HasFactory;

    protected $table = 'bebidas';

    public function comida()
    {
        return $this->belongsTo(Comida::class);
    }
}
