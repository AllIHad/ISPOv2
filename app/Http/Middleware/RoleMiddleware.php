<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,  $role): Response
    {
        if (!Auth::check()) {
            // Redirect to login if not authenticated
            return redirect('/login');
        }

        // Check if the user's role matches
        $requiredRole = $role === 'admin' ? 1 : 0; // Map 'admin' to 1, others to 0
        if (Auth::user()->role == $requiredRole) {
            return $next($request);
        }

        // Return unauthorized if roles don't match
        return abort(403, 'Unauthorized');

        return redirect('/login');
    }
}
