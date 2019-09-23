<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Zapato extends Model {

    protected $table = 'zapatos';

    protected $fillable = [
        'marca', 'description', 'foto', 'user_id'
    ];

    /*
    *   Relacíon con la model 'USER'
    */

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

}
