<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class PartnerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = Gate::inspect('update-partner');
        
        if ($response->allowed()) {
            return $next($request);
        }

        return redirect()->route('/partner-cp')->with('error', $response->message());

    }
}
