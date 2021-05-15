<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkEntreprise
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    { $role=Auth::user()->role;
        if ($role!='entreprise'){
            
            return redirect('profil');
        }
        return $next($request);
    }
    }
