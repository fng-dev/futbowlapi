<?php

namespace App\Models;

use App\User;
use App\Models\Disparo;
use Illuminate\Database\Eloquent\Model;


class Equipo extends Model {

    protected $table = 'equipos';

    protected $fillable = [
        'nombre', 'tipo', 'logo', 'patron_colores'
    ];

    /*
    *   Relacíon con la model 'USER'
    */

    public function user()
    {
        return $this->hasMany(User::class);
    }

    /*
    *   Relacíon con la model 'DISPARO'
    */

    public function disparo()
    {
        return $this->hasMany(Disparo::class);
    }

}
