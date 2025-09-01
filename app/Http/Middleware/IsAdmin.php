<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the authenticated user's role is 'admin'
        if ($request->user() && $request->user()->role === 'admin') {
            return $next($request);
        }

        // If not an admin, redirect to home with an unauthorized message
        return redirect('/')->with('status', 'Unauthorized access.');
    }
}

