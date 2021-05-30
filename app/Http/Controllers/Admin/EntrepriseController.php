<?php

namespace App\Http\Controllers\Admin;

use App\Entreprise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        return view('admin.entreprise.index',['entreprises' => Entreprise::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entreprise = Entreprise::find($id);
        return view('admin.entreprise.detail' , ['entreprise' => $entreprise]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('admin.entreprise.edit', ['entreprises'=>$entreprise]);

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
        $validatedData = $request->validate([
            'email' => 'required|email',
            'mdp' => 'required',
            'nom_entreprise' => 'required',
            'categorie' => ['required', Rule::in(['Informatique','Economie_gestion','Genie_proceder','mechanique','electrique'])],
            'ville' => 'required',
            'logo'=>'required',
            'description'=>'',
        ]);
        $validatedData['mdp']=Hash::make($validatedData['mdp']);
        //dd($request);
            $entreprise->update($validatedData);
            return redirect()->route('entreprises.show', $entreprise )->with('update','l entreprise Updated successfully');
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
        return redirect()->route('entreprises.index');
    }
}
