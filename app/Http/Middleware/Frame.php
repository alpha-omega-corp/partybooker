<?php

namespace App\Http\Middleware;


use Closure;

class Frame
{

    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('X-Frame-Options', '*');
        return $response;
    }
}
