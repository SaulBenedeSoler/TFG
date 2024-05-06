<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';
    protected $fillable = [
        'movie_id',
        'row',
        'seat',
        'sala_id',
        'estado_ticket',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function comida()
    {
        return $this->belongsTo(Comida::class);
    }

}
