<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && !in_array(strtolower($request->user()->partnerInfo->plan), ['premium', 'exclusif', 'standart'])) {
            return redirect('/partner-cp/' . $request->user()->id_partner . '/plans')->with('error', 'You must be subscribed to access this page.');
        }

        return $next($request);
    }
}
