<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('PaisesTableSeeder');
        $this->call('RegionesTableSeeder');
        $this->call('ComunasTableSeeder');
        $this->call('EstadiosTableSeeder');
        $this->call('ModojuegosTableSeeder');
        $this->call('PartidasTableSeeder');
        $this->call('EquiposTableSeeder');
        $this->call('NivelesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('DisparosTableSeeder');
        $this->call('ZapatosTableSeeder');
        $this->call('ReservasTableSeeder');
        $this->call('ClientsTableSeeder');
        $this->call('RolesTableSeeder');
    }
}
