<?php

namespace App\Http\Controllers;

use DomainException;
use App\Tools\TokenAuth;
use Illuminate\Http\Request;
use UnexpectedValueException;

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

        if ($request->header('authentication')) {

            try {

                $token = new TokenAuth();

                //Comprueba si el login es correcto. En caso afirmativo, devuelve el token de acceso

                //Caso no, devuelve "false"

                return $token->auth($request->header('authentication'));


            } catch (DomainException $e) {

                return response()->json(["status" => "Unauthorized"]);

            } catch (UnexpectedValueException $e) {

                return response()->json(["status" => "Unauthorized"]);

            }

        } else {

            return response()->json(["status" => "Unauthorized"]);
        }
    }

    //
}
