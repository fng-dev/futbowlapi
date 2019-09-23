<?php

namespace App\Http\Middleware;

use Closure;
use App\Tools\TokenAuth;
use DomainException;
use UnexpectedValueException;

class JwtAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //Comprobueba el Header "authorized", si no, devuelve "Unauthorized"

        if($request->header('authorized')){

            try{
                //Llama a la clase TokenAuth
                $Jwtoken = new TokenAuth();

                //Comprueba si la autorización es correcta. Si es así, devuelve el cliente de la aplicación.

                $client = $Jwtoken->authorize($request->header('authorized'));

                //Si no, devuelve "Unauthorized"

                if(!$client){
                    return "Unauthorized";
                }

            }catch(DomainException $e){

                return "Unauthorized";

            }catch(UnexpectedValueException $e){

                return "Unauthorized";

            }

        }else{

            return "Unauthorized";

        }

        return $next($request);
    }
}
