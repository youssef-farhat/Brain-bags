<?php

namespace App\Http\Controllers;

use App\Entreprise;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Entreprise = User::get();
        return view('profil.profil', ['entreprise' => $Entreprise]);
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

        // $validatedData = $request->validate([
        //     'nom_entreprise' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8|confirmed',
        //     'ville' => 'required|'
            

        // ]);

        $Entreprise = new Entreprise;
        $User = new User;
        $User->email = $request->email;
        $User->role = "entreprise";
        $User->name=$request->nom_entreprise;
        $User->password = Hash::make($request->password);
        $Entreprise->categorie = $request->categorie;
        $Entreprise->ville = $request->ville;
        $Entreprise->logo = "hello";
        $Entreprise->email = $User->email;
        $Entreprise->description = $request->description;
        
        $User->save();
        $Entreprise->save();
        
        if ($User->save() == 1) {
           return redirect('/con');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        $entreprise =DB::table('entreprises')
        ->join('users','users.email','=','entreprises.email')
        ->where('users.email','=', Auth::user()->email)
        ->get();
        return view('profil.profil',['entreprise'=>$entreprise]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        $entreprise =DB::table('entreprises')
        ->join('users','users.email','=','entreprises.email')
        ->where('users.email','=', Auth::user()->email)
        ->get();
      
      return view('profil.updateEntreprise',['entreprise'=>$entreprise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,User $User, Entreprise $Entreprise)
    {
        // $User->email = $request->email;
        // $User->role = "entreprise";
        // $User->name=$request->nom_entreprise;
        // $User->password = Hash::make($request->mdp);
        // $Entreprise->nom_entreprise = $request->nom_entreprise;
        // $Entreprise->categorie = $request->categorie;
        // $Entreprise->ville = $request->ville;
        // $Entreprise->logo = "hello";
        // $Entreprise->email = $User->email;
        // $Entreprise->description = $request->description;
        
        // $User->save();
        // $Entreprise->save();
        // if ($Entreprise->save() == 1) {
        //     redirect('/profil');
        // }
        $e = $User->email;
        $validatedData3 = $request->validate([
            'email' => 'required|email|',
            'name' => 'required',
            'password' => 'required',
            'role'=>'',
            
        ]);
        
        $validatedData3['password']=Hash::make($validatedData3['password']);
        $User->update($validatedData3);

        $validatedData4 = $request->validate([
            
            'ville' => 'required',
            'categorie'=>'required',
            

        ]);
            
        
            
        $Entreprise->update($validatedData4);
        DB::update('update entreprises set  categorie = ? ,ville = ? where email = ?',[$validatedData4['categorie'],$validatedData4['ville'],$e]);
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();
        return redirect()->route('/inscriE');
    }
}
