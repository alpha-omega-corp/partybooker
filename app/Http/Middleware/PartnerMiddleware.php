<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return back()->with('error', 'You are not authorized to access this page');
        }

        if (!Auth::user()->partner()->exists()) {
            return back()->with('error', 'Partner not found');
        }

        return $next($request);
    }
}
