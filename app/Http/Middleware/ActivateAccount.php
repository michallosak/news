<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ActivateAccount
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->activated != 1){
            // msg
            return redirect(route('home'));
        }
        return $next($request);
    }
}
