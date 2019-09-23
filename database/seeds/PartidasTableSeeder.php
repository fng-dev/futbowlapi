<?php

use App\Models\Partida;
use Illuminate\Database\Seeder;

class PartidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dateTime = new DateTime('NOW');

        Partida::create([
            'fecha_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fecha_final' => $dateTime->format('Y-m-d H:i:s'),
            'modojuego_id' => 1,
            'estadio_id' => 1
        ]);

        Partida::create([
            'fecha_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fecha_final' => $dateTime->format('Y-m-d H:i:s'),
            'modojuego_id' => 2,
            'estadio_id' => 2
        ]);

        Partida::create([
            'fecha_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fecha_final' => $dateTime->format('Y-m-d H:i:s'),
            'modojuego_id' => 1,
            'estadio_id' => 3
        ]);
    }
}
