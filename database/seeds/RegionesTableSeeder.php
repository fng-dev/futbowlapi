<?php

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([
            'nombre' => 'Minas Gerais',
            'pais_id' => 1
        ]);

        Region::create([
            'nombre' => 'Metropolitana',
            'pais_id' => 2
        ]);
    }
}
