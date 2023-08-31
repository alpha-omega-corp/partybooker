<?php

namespace App\Http\Middleware;

use Closure;

class PartybookerAdmin
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
        if(auth()->user()->type === 'admin'){
			return $next($request);
		} else if (auth()->user()->type === 'partner') {
			return redirect(LocaleMiddleware::getLocale().'/partner-cp');
		} 
		return redirect(LocaleMiddleware::getLocale().'/');
	}
}
