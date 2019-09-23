<?php

use App\Models\Zapato;
use Illuminate\Database\Seeder;

class ZapatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zapato::create([
            'marca' => 'Nike',
            'description' => 'El Mejor Zapato de Todos!',
            'foto' => 'foto_1.png'
        ]);

        Zapato::create([
            'marca' => 'Reebok',
            'description' => 'El Mejor Zapato de Todos!',
            'foto' => 'foto_2.png'
        ]);

        Zapato::create([
            'marca' => 'Adidas',
            'description' => 'El Mejor Zapato de Todos!',
            'foto' => 'foto_3.png'
        ]);

        Zapato::create([
            'marca' => 'Umbro',
            'description' => 'El Mejor Zapato de Todos!',
            'foto' => 'foto_4.png'
        ]);
    }
}
