<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PartybookerAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();
        if ($user->type === 'admin') {
            return $next($request);
        } else if (auth()->user()->type === 'partner') {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp/' . $user->id_partner . '/advert');
        }
        return redirect(LocaleMiddleware::getLocale() . '/');
    }
}
