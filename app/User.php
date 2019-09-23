<?php

namespace App;

use App\Models\Nivel;
use App\Models\Comuna;
use App\Models\Equipo;
use App\Models\Disparo;
use App\Models\Reserva;
use App\Models\Zapato;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apelido', 'alias', 'foto', 'rut', 'email', 'puntaje', 'cantidad_prox_nivel', 'equipo_id', 'comuna_id', 'nivel_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /*
    *   Relacíon con la model 'EQUIPO'
    */

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    /*
    *   Relacíon con la model 'COMUNA'
    */

    public function comuna()
    {
        return $this->belongsTo(Comuna::class);
    }

    /*
    *   Relacíon con la model 'NIVEL'
    */

    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }

    /*
    *   Relacíon con la model 'DISPARO'
    */

    public function disparo()
    {
        return $this->hasMany(Disparo::class);
    }

    /*
    *   Relacíon con la model 'RESERVA'
    */

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }

    /*
    *   Relacíon con la model 'ZAPATO'
    */

    public function zapato()
    {
        return $this->belongsToMany(Zapato::class);
    }
}
