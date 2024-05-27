<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';
    protected $fillable = ['movie_id', 'sala_id', 'asiento', 'user_id'];


    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function sala(){
        return $this->belongsTo(Sala::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }


}
