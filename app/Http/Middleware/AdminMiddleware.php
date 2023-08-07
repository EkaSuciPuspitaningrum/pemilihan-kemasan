<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Role::where('name', 'user')->first()->admins->contains(Auth::user())) {
            return $next($request);
        }

        return redirect('/');
    }
}
