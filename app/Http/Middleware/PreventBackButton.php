<?php

namespace App\Http\Middleware;

use Closure;

class PreventBackButton
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
        $response = $next($request);
        return $response->header('cache-Control','nocache,no-store,max-age=0,must-revalidate')
                        ->header('pragma','no-cache')
                        ->header('expires','sat,01 jan 1990 00:00:00 GMT');
    }
}
