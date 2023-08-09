<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class ExpertMiddleware
{
    public function handle($request, Closure $next)
    {
         // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/login_pakar');
        }

        // Check if the authenticated user is an expert
        if (Auth::user()->role !== 'expert') {
            // Customize behavior, e.g., redirect to a different route or show an error message
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
