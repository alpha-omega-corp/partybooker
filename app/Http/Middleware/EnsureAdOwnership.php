<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $partnerId = $request->input('id_partner');
        $params = $request->route()->parameters();

        if ($request->user()->type === 'admin' || $request->user()->id_partner === $params['partnerId']) {
            return $next($request);
        }

        return redirect()->route('profile-advert', $partnerId)->with('error', 'Unauthorized');
    }
}
