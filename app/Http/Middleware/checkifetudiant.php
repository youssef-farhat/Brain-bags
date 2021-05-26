<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class checkifetudiant
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
        if ($role!='etudiant'){
            
            return redirect('home');
        }
        return $next($request);
    }
}
