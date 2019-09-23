<?php

use App\Models\Disparo;
use Illuminate\Database\Seeder;

class DisparosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dateTime = new DateTime('NOW');

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 1235,
            'coordenada_y'     => 3521,
            'puntaje'          => 1000,
            'video'            => 'video_1_0.mkv',
            'user_id'          => 1,
            'partida_id'       => 1,
            'equipo_id'        => 1
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 2525,
            'coordenada_y'     => 3521,
            'puntaje'          => 900,
            'video'            => 'video_1_1.mkv',
            'user_id'          => 1,
            'partida_id'       => 1,
            'equipo_id'        => 1
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 2525,
            'coordenada_y'     => 3521,
            'puntaje'          => 900,
            'video'            => 'video_1_2.mkv',
            'user_id'          => 1,
            'partida_id'       => 1,
            'equipo_id'        => 1
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 5236,
            'coordenada_y'     => 4585,
            'puntaje'          => 600,
            'video'            => 'video_1_3.mkv',
            'user_id'          => 3,
            'partida_id'       => 1,
            'equipo_id'        => null
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 3254,
            'coordenada_y'     => 8565,
            'puntaje'          => 800,
            'video'            => 'video_1_4.mkv',
            'user_id'          => 3,
            'partida_id'       => 3,
            'equipo_id'        => null
        ]);


        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 5236,
            'coordenada_y'     => 4585,
            'puntaje'          => 600,
            'video'            => 'video_2_0.mkv',
            'user_id'          => 2,
            'partida_id'       => 2,
            'equipo_id'        => 2
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 1252,
            'coordenada_y'     => 3521,
            'puntaje'          => 1500,
            'video'            => 'video_2_1.mkv',
            'user_id'          => 2,
            'partida_id'       => 2,
            'equipo_id'        => 2
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 1252,
            'coordenada_y'     => 3521,
            'puntaje'          => 550,
            'video'            => 'video_2_2.mkv',
            'user_id'          => 1,
            'partida_id'       => 1,
            'equipo_id'        => 1
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 2541,
            'coordenada_y'     => 3652,
            'puntaje'          => 300,
            'video'            => 'video_2_3.mkv',
            'user_id'          => 1,
            'partida_id'       => 1,
            'equipo_id'        => 1
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 5236,
            'coordenada_y'     => 4585,
            'puntaje'          => 600,
            'video'            => 'video_3_0.mkv',
            'user_id'          => 3,
            'partida_id'       => 3,
            'equipo_id'        => null
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 5236,
            'coordenada_y'     => 4585,
            'puntaje'          => 600,
            'video'            => 'video_3_1.mkv',
            'user_id'          => 2,
            'partida_id'       => 3,
            'equipo_id'        => 2
        ]);

        Disparo::create([
            'fechahora_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'fechahora_final'  => $dateTime->format('Y-m-d H:i:s'),
            'coordenada_x'     => 5236,
            'coordenada_y'     => 4585,
            'puntaje'          => 600,
            'video'            => 'video_3_2.mkv',
            'user_id'          => 1,
            'partida_id'       => 3,
            'equipo_id'        => 1
        ]);
    }
}
