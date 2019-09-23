<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Estadio extends Model {

    protected $table = 'estadios';

    protected $fillable = [
        'nombre', 'tipo', 'comuna_id'
    ];


    /*
    *   Relacíon con la model 'PARTIDA'
    */

    public function partida()
    {
        return $this->hasMany(Partida::class);
    }

    /*
    *   Relacíon con la model 'COMUNA'
    */

    public function comuna()
    {
        return $this->belongsTo(Comuna::class);
    }

}
