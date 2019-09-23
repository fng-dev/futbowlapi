<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Region extends Model {

    protected $table = 'regiones';

    protected $fillable = [
        'nombre', 'pais_id'
    ];


    /*
    *   Relacíon con la model 'PAIS'
    */

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }


    /*
    *   Relacíon con la model 'COMUNA'
    */


    public function comuna()
    {
        return $this->hasMany(Comuna::class);
    }

}
