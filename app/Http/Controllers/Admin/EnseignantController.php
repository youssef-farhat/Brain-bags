<?php

namespace App\Http\Controllers\Admin;

use App\Enseignant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class EnseignantController extends Controller
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
        return view('admin.enseignant.index' , ['enseignants' => Enseignant::all()]);
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
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enseignant = Enseignant::find($id);
        return view('admin.enseignant.detail' , ['enseignant' => $enseignant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignant $enseignant)
    {
        return view('admin.enseignant.edit', ['enseignants'=>$enseignant]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enseignant $enseignant)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'ville' => 'required',
            'departement' => ['required', Rule::in(['Technologie de l information','Mecanique','électrique','Commerce'])],
            'mdp' => 'required',
        ]);
        $validatedData['mdp']=Hash::make($validatedData['mdp']);
        //dd($request);
            $enseignant->update($validatedData);
            return redirect()->route('enseignants.show', $enseignant )->with('update','l enseignant Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();
        return redirect()->route('enseignants.index');
    }
}
