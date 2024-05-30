<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /*Creo la relación con la tabla promociones*/
    public function promociones(){
        return $this->belongsToMany(Promociones::class);
    }

    /*Creo la relación con la tabla prombuy*/
    public function prombuy(){
        return $this->belongsTo(PromBuy::class, 'user_id');
    }
    /*Creo la relación con la tabla ticket*/
    public function ticket(){
        return $this->belongsTo(ticket::class);
    }
    /*Creo la relación con la tabla menbuy*/
    public function menbuy(){
        return $this->belongsTo(MenBuy::class);
    }


}
