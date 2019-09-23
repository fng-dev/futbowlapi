<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Disparo extends Model {

    protected $table = 'disparos';

    protected $fillable = [
        'fechahora_inicio', 'fechahora_final', 'coordenada_x', 'coordenada_y', 'puntaje', 'video', 'user_id', 'partida_id', 'equipo_id'
    ];


    /*
    *   Relacíon con la model 'USER'
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
    *   Relacíon con la model 'EQUIPO'
    */

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    /*
    *   Relacíon con la model 'PARTIDA'
    */

    public function partida()
    {
        return $this->belongsTo(Partida::class);
    }

}
