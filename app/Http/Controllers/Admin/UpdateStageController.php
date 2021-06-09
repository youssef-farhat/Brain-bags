<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stage;

class UpdateStageController extends Controller
{
    public function index()
    {
        return view('stage.updatestage');
    }   


    public function edit(Request $request , Stage $stage)
    {
        
    }
}
