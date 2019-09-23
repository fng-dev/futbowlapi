<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Comuna extends Model {

    protected $table = 'comunas';

    protected $fillable = [
        'nombre', 'region_id'
    ];

    /*
    *   Relacíon con la model 'ESTADIO'
    */

    public function estadio()
    {
        return $this->hasMany(Estadio::class);
    }

    /*
    *   Relacíon con la model 'REGION'
    */

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    /*
    *   Relacíon con la model 'USER'
    */

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
