<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Echo_;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        $etudiant=new User;
         $etudiant->name=$request->name;
         $etudiant->email=$request->email;
         $etudiant->password=Hash::make($request->password);
         $etudiant->role=$request->role;
         //$etudiant->ville_E=$request->ville_E;
        // $etudiant->depe_E=$request->depe_E;
         //$etudiant->class_E=$request->class_E;
         //$etudiant->Description=$request->Description;
         $etudiant->save(); 
          
            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $validatedData['password']=Hash::make($validatedData['password']);
        $user->update($validatedData);
        return redirect()->back();
        // $user->name=$request->name;
        // $user->email=$request->email;
        // $user->password=$request->password;
        //     $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
