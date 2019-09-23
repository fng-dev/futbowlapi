<?php

namespace App\Tools;


use Firebase\JWT\JWT;
use App\Models\Client;
use DateTime;
use Firebase\JWT\SignatureInvalidException;

class TokenAuth{

    /*
    *   Clave de Seguridad
    */
    private $key = 'gux@)!(';

    /*
    *   Token generado por la clase
    */
    public $token = "" ;


    /*
    *   Método constructor
    */

    public function __construct($key = null)
    {
        if($key != null){
            $this->key = $key;
        }
    }


    /*
    *   Rol responsable de generar token encriptado
    */

    public function encode($array)
    {

        return JWT::encode($array, $this->key);

    }


    /*
    *   Rol responsable de descifrar token
    */

    public function decode($token)
    {

        try{

            return JWT::decode($token, $this->key, array('HS256'));

        }catch(SignatureInvalidException $e){

            return false;

        }

    }

    /*
    *   Rol responsable de autenticar token
    */

    public function auth($token)
    {

        $data = (array) $this->decode($token);

        $client = Client::where('email', $data['email'])->where('password',$data['password'])->get()->first();

        if($client){

            $date = new DateTime('NOW');

            $token = $date->format('Y-m-d h:i:s') . $data['email'];

            $hash = app('hash')->make($token);

            $client->token = $hash;

            if($client->save()){

                $response = [
                    "token" => $client->token,
                    "email" => $data['email']
                ];

                $response = $this->encode($response);

                return $response;

            }else{

                return false;

            }

        }else{

            return false;

        }

    }


    public function authorize($token)
    {
        $data = (array) $this->decode($token);

        $client = Client::where('email', $data['email'])->where('token',$data['token'])->get()->first();

        return $client;
    }


}
