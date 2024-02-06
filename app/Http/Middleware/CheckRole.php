<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->id_role == $role) {
            return $next($request);
        }

        return abort(403, 'Unauthorized.');
    }
}
