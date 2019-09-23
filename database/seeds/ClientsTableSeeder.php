<?php

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            "nombre" => "Client 1",
            "email" => "client1@client.com",
            "password" => app('hash')->make('client1'),
            "token" => null
        ]);

        Client::create([
            "nombre" => "Client 2",
            "email" => "client2@client.com",
            "password" => app('hash')->make('client2'),
            "token" => null
        ]);
    }
}
