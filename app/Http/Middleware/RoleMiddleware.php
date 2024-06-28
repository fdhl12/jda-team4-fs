<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,  $name)
    {

        if (Auth::check() && Auth::user()->role->name === $name) {
            return $next($request);
        }
        return redirect('/admin')->with('error', 'You do not have access to this page.');
    }
}
