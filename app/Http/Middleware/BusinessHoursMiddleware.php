<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BusinessHoursMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $hour = now()->format('H'); // current hour (00-23)

        if ($hour < 9 || $hour >= 17) {
            return response('🚫 Access only allowed between 9 AM and 5 PM.', 403);
        }

        return $next($request);
    }
}
