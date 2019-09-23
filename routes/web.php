<?php

use App\Models\Client;
use App\Tools\TokenAuth;
use Illuminate\Support\Facades\Route;

$router->get('/',['middleware' => 'auth'], function () use ($router) {
    return $router->app->version();
});

Route::get('/gerador', function(){

    $token = new TokenAuth();

    $data = [
        "email" => 'client1@client.com',
        "password" => '$2y$10$e5Xgy74pQJsh5oydzoPL2uWg0hU9cr0KYyWFzQX7/cHCYe6xNGz4G',
    ];


    $enc = $token->encode($data);

    return $enc;

});

$router->post("/login", "LoginController@login");
$router->get("/authpage", ['middleware' => 'jwstoken', 'uses' => "MainController@index"]);

