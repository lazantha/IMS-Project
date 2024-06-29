<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomUrlProtection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Example: Check if the user is authenticated
         if (!Auth::check()) {
            return redirect('/login'); // Redirect to login page if not authenticated
        }

        // Example: Check if the user has a specific role
        if (!Auth::user()->hasRole('admin')) {
            return redirect('/unauthorized'); // Redirect to unauthorized page if the user does not have the 'admin' role
        }
        return $next($request);
    }
}
