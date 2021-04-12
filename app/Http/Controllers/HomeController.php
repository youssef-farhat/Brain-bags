<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
    
        
        
        return view('welcome' , [ 'clients'=>Client::all() ]);
    }
    
}
