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
            $role=Auth::user()->role;
            //return redirect(RouteServiceProvider::HOME);
            if ($role!='etudiant'){
            
                return redirect('home');
            } 
=======
            //return redirect(RouteServiceProvider::HOME);
            if (Auth::user()->role =='entreprise'){
                 return '/profil' ;
            }
<<<<<<< HEAD
            return '/';

            if (Auth::user()->role=="admin") {
                // page index admin pas encore prete 
                return '/accueil';
            }
            return '/home';
=======
            return('/');
>>>>>>> 0946bed8ef0ca289501079489dba012950333e4b
>>>>>>> 8597f470e14be9c2236efc3b7d47df9fe326e458
        }

        return $next($request);
    }
}
