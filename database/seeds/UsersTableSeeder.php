<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nombre"              => "Francisco",
            'apelido'             => "Carlos",
            'alias'               => "Chico",
            'foto'                => "profile_image_1.png",
            'rut'                 => "123.123.123.12",
            'email'               => "francisco@gmail.com",
            'password'            => app('hash')->make('12345678'),
            'puntaje'             => 300,
            'cantidad_prox_nivel' => 700,
            'facebook_id'         => null,
            'equipo_id'           => 1,
            'comuna_id'           => 2,
            'nivel_id'            => 1
        ]);

        User::create([
            "nombre"              => "Vera",
            'apelido'             => "Lucia",
            'alias'               => "Velucia",
            'foto'                => "profile_image_2.png",
            'rut'                 => "321.321.321.32",
            'email'               => "vera@gmail.com",
            'password'            => app('hash')->make('12345678'),
            'puntaje'             => 1000,
            'cantidad_prox_nivel' => 1000,
            'facebook_id'         => null,
            'equipo_id'           => 2,
            'comuna_id'           => 3,
            'nivel_id'            => 2
        ]);

        User::create([
            "nombre"              => "Pedro",
            'apelido'             => "Henrique",
            'alias'               => "pedrito",
            'foto'                => "profile_image_3.png",
            'rut'                 => "213.213.213.21",
            'email'               => "pedrito@gmail.com",
            'password'            => app('hash')->make('12345678'),
            'puntaje'             => 1000,
            'cantidad_prox_nivel' => 1000,
            'facebook_id'         => null,
            'equipo_id'           => null,
            'comuna_id'           => 1,
            'nivel_id'            => 3
        ]);
    }
}
