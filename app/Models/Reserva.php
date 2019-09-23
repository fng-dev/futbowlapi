<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Reserva extends Model {

    protected $table = 'reservas';

    protected $fillable = [
        'fecha_inicio', 'user_id'
    ];


    /*
    *   Relacíon con la model 'USER'
    */


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
