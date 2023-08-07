<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class ExpertMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Role::where('first_name_pakar', 'pakar')->first()->pakars->contains(Auth::user())) {
            return $next($request);
        }

        return redirect('/');
    }
}
