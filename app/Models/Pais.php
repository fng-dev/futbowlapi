<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Pais extends Model {

    protected $table = 'paises';

    protected $fillable = [
        'nombre'
    ];

    /*
    *   Relacíon con la model 'REGION'
    */

    public function region()
    {
        return $this->hasMany(Region::class);
    }

}
