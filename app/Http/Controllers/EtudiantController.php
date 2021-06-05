<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\Echo_;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //$this->middleware('ins');
       // $this->middleware('checkEntreprise');
        
    }
    public function index()
    {
        // $etudiant = User::get();
        // return view('storeEt', ['etudiant' => $etudiant]);
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
       
        
        $etudiant = new Etudiant;
        $User = new User;
         $User->name=$request->name;
         $User->email=$request->email;
         $etudiant->email = $User->email;

         $User->password=Hash::make($request->password);
         $User->role=$request->role;
         $etudiant->ville_E=$request->ville_E;
         $etudiant->depe_E=$request->depe_E;
         $etudiant->class_E=$request->class_E;
         $etudiant->Description=$request->Description;
         $User->save();

         $etudiant->save();
         if ($etudiant->save() == 1) {
            redirect('/profileetud');
        }
         
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
        $etudiant =DB::table('etudiants')
        ->join('users','users.email','=','etudiants.email')
        ->where('users.email','=', Auth::user()->email)
        ->get();
        
        return view('etudiantprofile.profilEtud',['etudiant'=>$etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        // $etudiant =DB::table('etudiants')
        // ->join('users','users.email','=','etudiants.email')
        // ->where('users.email','=', Auth::user()->email)
        // ->get();
        // dd($etudiant);
        
        // return view('etudiantprofile.modifProfilEtude',['etudiant'=>$etudiant]);
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

            //  $validatedData = $request->validate([
            //      'email' => 'required|email',
            //      'name' => 'required',
            //      'password' => 'required',
            //      'ville_E' => 'required',
            //      'depe_E'=>'required',
            //      'class_E'=>'required'
                 
            // ]);
            //  $user->update($validatedData);
            // //dd($validatedData);
            //     // $user->email=$request->email;
            //     // $user->name=$request->name;
            //     // $user->ville_E=$request->ville_E;
            //     // $user->depe_E=$request->depe_E;
            //     // $user->class_E=$request->class_E;
            //     // $user->password=Hash::make($request->password);

            //     // $user->save();

                // $validatedData = $request->validate([
                //     'email' => 'required|email',
                //    'name' => '',
                //    'password' => '',
                //    'ville_E' => '',
                //    'depe_E'=>'',
                //    'class_E'=>''
                // ]);
                //  $user->update($validatedData);
                // //  $user->email=$request->email;
                // //   $user->name=$request->name;
                // //   $user->ville_E=$request->ville_E;
                // //   $user->depe_E=$request->depe_E;
                // // $user->class_E=$request->class_E;
                // //  $user->password=Hash::make($request->password);
                // //     $user->save();
                    
                $validatedData = $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required',
                    'role'=>'',
                    'ville_E' => 'required',
                    'depe_E'=> 'required',
                    'class_E'=> 'required'
                ]);
                
                $validatedData['password']=Hash::make($validatedData['password']);
                $user->update($validatedData);
                return redirect()->back();

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
        $etudiant->delete();
        return redirect()->route('/ins');
    }
}