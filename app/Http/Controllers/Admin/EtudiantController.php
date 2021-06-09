<?php

namespace App\Http\Controllers\Admin;

use App\Etudiant;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiant=DB::table('users')
        ->join('etudiants','etudiants.email','users.email')->where('users.role','=','etudiant')->get();
        return view('admin.etudiant.index' ,['etudiants' => $etudiant]);
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
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return view('admin.etudiant.detail' , ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $user=DB::table('users')
        ->join('etudiants','etudiants.email','=','users.email')
        ->where('users.email','=', $etudiant->email)
        ->get();
        return view('admin.etudiant.editEtudiant', ['etudiants'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant , User $user)
    {
        // $validatedData = $request->validate([
        //     'E_mail' => 'required|email',
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'ville_E' => 'required',
        //     'departement' => ['required', Rule::in(['Technologie de linformation','Mecanique','électrique','Commerce'])],
        //     'motp_E' => 'required',
        // ]);
        // $validatedData['motp_e']=Hash::make($validatedData['motp_E']);
        // //dd($request);
        //     $etudiant->update($validatedData);
        //     return redirect()->route('etudiants.show', $etudiant )->with('update','etudiant Updated successfully');
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|',
            'password' => 'required',
            'role'=>'',
            
        ]);
        
        $validatedData['password']=Hash::make($validatedData['password']);
       $user->update($validatedData);

        $validatedData2 = $request->validate([
            'ville_E' => 'required',
            'depe_E'=> 'required',
            'class_E'=> 'required'
        ]);
        
        $etudiant->update($validatedData2);
        DB::update('update etudiants set ville_E = ? , depe_E = ? , class_E = ?  where email = ?',[$validatedData2['ville_E'],$validatedData2['depe_E'],$validatedData2['class_E'],Auth::user()->email]);
        
        return redirect()->back()->with('success','etudiant updated successfully');            
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }
}
