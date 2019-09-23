<?php

use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create([
            'nombre' => 'Brasil'
        ]);

        Pais::create([
            'nombre' => 'Chile'
        ]);
    }
}
