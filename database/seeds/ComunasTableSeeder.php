<?php

use App\Models\Comuna;
use Illuminate\Database\Seeder;

class ComunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comuna::create([
            'nombre'    => 'Divinopolis',
            'region_id' => 1
        ]);

        Comuna::create([
            'nombre'    => 'San Miguel',
            'region_id' => 2
        ]);

        Comuna::create([
            'nombre'    => 'Providencia',
            'region_id' => 2
        ]);
    }
}
