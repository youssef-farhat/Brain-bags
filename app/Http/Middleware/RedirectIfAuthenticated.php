<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // return redirect(RouteServiceProvider::HOME);
<<<<<<< HEAD
            if(Auth::user()->role=='admin'){
                return '/admin-dashboard';
            }
            if(Auth::user()->role=='etudiant'){
                return '/dem';
            }
            return '/';
=======

            if (Auth::user()->role=="admin") {
                // page index admin pas encore prete 
                return '/admin-profile';
            }
            return '/home';
>>>>>>> c8c081a55bd9931d02c5a542935be8bf09d3fbff
        }

        return $next($request);
    }
}
