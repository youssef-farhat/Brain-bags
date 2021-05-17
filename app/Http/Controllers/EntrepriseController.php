<?php

namespace App\Http\Controllers;

use App\Entreprise;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $this->validate($request, [
            'email' => 'required',
            'mdp' => 'required',
            'nom_entreprise' => 'required',
            'categorie' => 'required',
            'ville' => 'required',
            'description' => 'required'
        ]);

        $Entreprise = new Entreprise;
        $Entreprise->email = $request->email;
        $Entreprise->mdp = Hash::make($request->mdp);
        $Entreprise->nom_entreprise = $request->nom_entreprise;
        $Entreprise->categorie = $request->categorie;
        $Entreprise->ville = $request->ville;
        $Entreprise->logo = "hello";
        $Entreprise->description = $request->description;
        $Entreprise->save();
        if ($Entreprise->save() == 1) {
            redirect('/con');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
}
