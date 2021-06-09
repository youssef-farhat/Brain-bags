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
<<<<<<< HEAD
   /* protected $redirectTo = RouteServiceProvider::HOME;*/
     public  function redirectTo(){
         $role=Auth::user()->role;
         switch($role){
=======
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo(){
        
        if(Auth::user()->role=='admin'){
            return '/accueil';
        }
        if(Auth::user()->role=='etudiant'){
            return '/dem';
        }
        if(Auth::user()->role=='entreprise'){
            return '/en';
        }
        return '/';
    }
>>>>>>> 1298f03a74091ad8fd94e1f47230069552f049df

          
        
         
       


     
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
