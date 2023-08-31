<?php

namespace App\Http\Middleware;

use Closure;
use Request;

class EmailVerified
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
        if(auth()->user()->email_verification == 1){
		
			return redirect(LocaleMiddleware::getLocale().'/email-verifyed');
		
		}
        return $next($request);
	}
}