<?php

use App\Models\Reserva;
use Illuminate\Database\Seeder;

class ReservasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateTime = new DateTime('NOW');

        Reserva::create([
            'fecha_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'user_id' => 1
        ]);

        Reserva::create([
            'fecha_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'user_id' => 2
        ]);

        Reserva::create([
            'fecha_inicio' => $dateTime->format('Y-m-d H:i:s'),
            'user_id' => 3
        ]);
    }
}
