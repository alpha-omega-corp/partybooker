<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureUserAdmin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::user()->isAdmin()) {
            return redirect('/')->with('error', 'Access denied');
        }

        return $next($request);
    }
}
