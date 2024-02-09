<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->partner()->exists()) {
            return $next($request);
        }

        return back();
    }
}
