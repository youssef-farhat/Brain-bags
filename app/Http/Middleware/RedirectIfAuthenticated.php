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
            //return redirect(RouteServiceProvider::HOME);
            if (Auth::user()->role =='entreprise'){
                 return '/profil' ;
            }
            return('/admin-dashboard');
        }

        return $next($request);
    }
}
