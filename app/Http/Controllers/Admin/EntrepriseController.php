<?php

namespace App\Http\Controllers\Admin;

use App\Entreprise;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        
        $entreprises=DB::table('users')
        ->join('entreprises','entreprises.email','users.email')->where('users.role','=','entreprise')->get();
        return view('admin.entreprise.index',['entreprises' =>$entreprises]);
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
        $user=DB::table('users')
        ->join('entreprises','entreprises.email','=','users.email')
        ->where('users.email','=', $entreprise->email)
        ->get();
       // dd($user);
        return view('admin.entreprise.edit', ['entreprises'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise, User $user)
    {
        // $validatedData = $request->validate([
            //     'email' => 'required|email',
            //     'mdp' => 'required',
            //     'nom_entreprise' => 'required',
            //     'categorie' => ['required', Rule::in(['Informatique','Economie_gestion','Genie_proceder','mechanique','electrique'])],
            //     'ville' => 'required',
            //     'logo'=>'required',
            //     'description'=>'',
            // ]);
            // $validatedData['mdp']=Hash::make($validatedData['mdp']);
            // //dd($request);
            //     $entreprise->update($validatedData);
            //     return redirect()->route('entreprises.show', $entreprise )->with('update','l entreprise Updated successfully');
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|',
                'password' => 'required',
                'role'=>'',
                
                ]);
                
                //dd($entreprise);
        $validatedData['password']=Hash::make($validatedData['password']);
        DB::update('update users set name = ? , email  = ? ,password = ? where email = ?',[$validatedData['name'],$validatedData['email'],$validatedData['password'],$entreprise->email]);

        $validatedData2 = $request->validate([
            'categorie'=>'required',
            'ville' => 'required',
            'logo'=> 'required',
            'description'=>'min:2'
            ]);
        //dd($validatedData2);
        // $user->update($validatedData2);
        DB::update('update entreprises set categorie = ? , ville = ? , logo = ? ,description = ? where email = ?',[$validatedData2['categorie'],$validatedData2['ville'],$validatedData2['logo'],$validatedData2['description'],$validatedData['email']]);
        
        return redirect()->back()->with('success','entreprises updated successfully');  
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
