<?php

namespace App\Http\Controllers;

use App\Tools\TokenAuth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function login(Request $request)
    {

        $token = new TokenAuth();

        //Comprueba si el login es correcto. En caso afirmativo, devuelve el token de acceso

        //Caso no, devuelve "false"

        return $token->auth($request->header('authentication'));

    }

    //
}
