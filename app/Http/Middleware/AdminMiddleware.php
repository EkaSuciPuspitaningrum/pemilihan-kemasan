<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
            // Check if the user is authenticated
            if (!Auth::check()) {
                return redirect('/login_admin');
            }
        
            // Check if the authenticated user is an admin
            if (Auth::user()->role === 'admin') {
                return redirect('/dashboard_super');
            } else {
                // User is not an admin, show unauthorized error
                abort(403, 'Unauthorized');
            }
            

            return $next($request);
    
    }
}
