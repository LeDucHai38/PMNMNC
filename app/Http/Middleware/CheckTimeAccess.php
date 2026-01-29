<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTimeAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $now = now();
        $start = Carbon::parse('08:00:00');
        $end = Carbon::parse('15:00:00');
        if ($now->between($start, $end)) {
            return $next($request);
        }
        else {
        return response()->json(['message' => 'Access denied. Time access middleware is active.', 'time' => $now->toDateTimeString()], 403);
         }
    }
}
