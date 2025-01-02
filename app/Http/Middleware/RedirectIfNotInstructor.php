<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotInstructor
{
    public function handle($request, Closure $next, $guard = 'instructor')
    {
        if (!Auth::guard($guard)->check()) {
             // Set flash message
             session()->flash('error', 'You are not authorized to access this page.');
             return redirect('/instructor/login');
        }
 
        return $next($request);
    }
}
