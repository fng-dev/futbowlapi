<?php

namespace App\Models;

use App\Models\Partida;
use Illuminate\Database\Eloquent\Model;


class Modojuego extends Model {

    protected $table = 'modojuegos';

    protected $fillable = [
        'nombre', 'configuracion'
    ];

    /*
    *   Relacíon con la model 'PARTIDA'
    */

    public function partida()
    {
        return $this->hasMany(Partida::class);
    }

}
