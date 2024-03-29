<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo(){
        
        if(Auth::user()->role=='admin'){
            return '/profile';
        }
        if(Auth::user()->role=='etudiant'){
            return '/dem';
        }
        if(Auth::user()->role=='entreprise'){
            return '/en';
        }
        return '/';
    }

          
        
         
       


     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
