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
            $role=Auth::user()->role;
            //return redirect(RouteServiceProvider::HOME);
            if ($role=='etudiant'){
            
                return redirect('/dem');
            } 
<<<<<<< HEAD
=======
            //return redirect(RouteServiceProvider::HOME);
            if (Auth::user()->role =='entreprise'){
                 return '/profil' ;
            }
            return('/admin-dashboard');
>>>>>>> 1298f03a74091ad8fd94e1f47230069552f049df
        }

        return $next($request);
    }
}
