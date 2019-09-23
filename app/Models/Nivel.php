<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Nivel extends Model {

    protected $table = 'niveles';

    protected $fillable = [
        'nombre', 'puntaje_requerido'
    ];


    /*
    *   Relacíon con la model 'USER'
    */

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
