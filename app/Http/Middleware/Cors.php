<?php


namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public $headers = [
        'Access-Control-Allow-Origin'           => '*',
        'Acces-Control-Allow-Methods'           => 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Credentials'      => 'true',
        'Access-Control-Max-Age'                => '86400',
        'Access-Control-Allow-Headers'          => 'Content-Type, Authorization, X-Requested-With'

    ]; 

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}

