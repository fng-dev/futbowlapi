<?php

use App\Models\Modojuego;
use Illuminate\Database\Seeder;

class ModojuegosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modojuego::create([
            'nombre' => "Uno a Uno",
            'configuracion' => "{configuracion}"
        ]);

        Modojuego::create([
            'nombre' => "Tiro Libre",
            'configuracion' => "{configuracion}"
        ]);
    }
}
