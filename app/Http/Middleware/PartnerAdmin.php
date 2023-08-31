<?php

namespace App\Http\Middleware;

use Closure;

class PartnerAdmin
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
        if(auth()->user()->type === 'partner'){
			return $next($request);
		} else if (auth()->user()->type === 'admin') {
			return redirect(LocaleMiddleware::getLocale().'/cp');
		} 
		return redirect(LocaleMiddleware::getLocale().'/');
    }
}
