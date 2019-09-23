<?php

use App\Models\Nivel;
use Illuminate\Database\Seeder;

class NivelesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel::create([
            'nombre' => 'Nivel 1',
            'puntaje_requerido' => 1000
        ]);

        Nivel::create([
            'nombre' => 'Nivel 2',
            'puntaje_requerido' => 2000
        ]);

        Nivel::create([
            'nombre' => 'Nivel 3',
            'puntaje_requerido' => 3000
        ]);

        Nivel::create([
            'nombre' => 'Nivel 4',
            'puntaje_requerido' => 4000
        ]);

        Nivel::create([
            'nombre' => 'Nivel 5',
            'puntaje_requerido' => 5000
        ]);
    }
}
