<?php

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipo::create([
            'nombre' => 'Equipo 1',
            'tipo'  => 'Nacional',
            'logo' => 'logo_equipo_1.png',
            'patron_colores' => 'rojo e negro'
        ]);

        Equipo::create([
            'nombre' => 'Equipo 2',
            'tipo'  => 'Internacional',
            'logo' => 'logo_equipo_2.png',
            'patron_colores' => 'Azul e Verde'
        ]);
    }
}
