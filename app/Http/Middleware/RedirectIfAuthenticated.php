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
<<<<<<< HEAD
            //return redirect(RouteServiceProvider::HOME);
            if (Auth::user()->role =='entreprise'){
                 return '/profil' ;
            }
            return('/');
=======
            // return redirect(RouteServiceProvider::HOME);
            
            if(Auth::user()->role=='etudiant'){
                return '/dem';
            }
            return '/';

            if (Auth::user()->role=="admin") {
                // page index admin pas encore prete 
                return '/admin-profile';
            }
            return '/home';
>>>>>>> master
        }

        return $next($request);
    }
}
