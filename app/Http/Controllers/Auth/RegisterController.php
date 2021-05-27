<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
<<<<<<< HEAD
            'role'=>['required', 'string'],
            'ville_E'=>['required','string'],
            'depe_E'=>['required','string'],
            'class_E'=>['required','string'],
            'Description'=>['string'],

=======
>>>>>>> 0946bed8ef0ca289501079489dba012950333e4b

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
<<<<<<< HEAD
            'role'=>$data['role'],
            'ville_E'=>$data['ville_E'],
            'depe_E'=>$data['depe_E'],
            'class_E'=>$data['class_E'],
            'Description'=>$data['Description'],

=======
            
>>>>>>> 0946bed8ef0ca289501079489dba012950333e4b
        ]);
    }

    public  function redirectTo(){
        $role=Auth::user()->role;
        switch($role){

           case 'etudiant':
           return '/profileetud';
           break;

           case 'admin':
           return '/admine-dashbord';
           break;

          case 'ensignement':
          return'/profil';
          break;
           default:
           //code
           break;
        }
       }
}
