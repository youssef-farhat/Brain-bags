<?php

namespace App\Http\Controllers;

use App\Administrateur;
use App\Entreprise;
use App\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function entreprise()
    {
        $entreprises = Entreprise :: get();
        return view('admin.entreprise', 
        ['entreprises' => $entreprises ]);
    }
    
    public function etudiant()
    {
        $etudiants = Etudiant :: get();
        return view('admin.etudiant', 
        ['etudiants' => $etudiants ]);
    }
    
   
}
