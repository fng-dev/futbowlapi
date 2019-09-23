<?php

use App\Models\Estadio;
use Illuminate\Database\Seeder;

class EstadiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estadio::create([
            'nombre' => 'Estadio 1',
            'tipo' => 'Matriz',
            'comuna_id' => 1
        ]);

        Estadio::create([
            'nombre' => 'Estadio 2',
            'tipo' => 'Matriz',
            'comuna_id' => 2
        ]);

        Estadio::create([
            'nombre' => 'Estadio 3',
            'tipo' => 'Sucursal',
            'comuna_id' => 3
        ]);
    }
}
