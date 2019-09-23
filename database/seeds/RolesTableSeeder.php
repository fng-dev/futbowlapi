<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "nombre" => "Administrador",
            "scope" => "admin"
        ]);

        Role::create([
            "nombre" => "Aplicativo",
            "scope" => "app"
        ]);
    }
}
