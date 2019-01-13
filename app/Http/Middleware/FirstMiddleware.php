<?php

namespace App\Http\Middleware;

use Closure;
use Log;
class FirstMiddleware
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
        Log::debug('first midd');
        return $next($request); //passa para o proximo middleware ou a pagina(controller) requerida
        //return response("deu merda"); //breka a cadeia de middlewares
    }
}
