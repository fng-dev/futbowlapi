<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Partida extends Model {

    protected $table = 'partidas';

    protected $fillable = [
        'fecha_inicio', 'fecha_final', 'modojuego_id', 'estadio_id'
    ];

    /*
    *   Relacíon con la model 'DISPARO'
    */

    public function disparo()
    {
        return $this->hasMany(Disparo::class);
    }

    /*
    *   Relacíon con la model 'MODOJUEGO'
    */

    public function modojuego()
    {
        return $this->belongsTo(Modojuego::class);
    }

    /*
    *   Relacíon con la model 'ESTADIOS'
    */

    public function estadio()
    {
        return $this->belongsTo(Estadio::class);
    }

}
