<?php

namespace App\Http\Controllers;

use App\Demande;
use App\Entreprise;
use App\Etudiant;
use App\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkEtudiant');
        
    }
    public function getDemandes(){
        $demandes=DB::table('stages')->join('entreprises','entreprises.id','=','stages.id_entreprise')
            ->join('demandes','demandes.stage_id','=','stages.id')
            ->where('demandes.etudiant_id','=', Auth::user()->id)
        ->get();
        return view('connect.html.demandeList',['demandes'=>$demandes]);
    }

    public function test($idDemande)
    {
        // $demande = Stage::find($idDemande);
        $demandes=DB::table('stages')
                                    ->join('entreprises','entreprises.id','id_entreprise')
                                    ->where('stages.id','=',$idDemande)
                                    ->get() ;
        return view('connect.html.demandeForm',['demandes'=>$demandes,'idDemande'=>$idDemande]);
    }
    public function index()

    {
        $demandes=DB::table('stages')->join('entreprises','entreprises.id','id_entreprise')->paginate(5);
         //$demandes = Stage::paginate(5);
        


        return view('connect.html.demande',['demandes'=>$demandes]);
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
        $find=Demande::where('etudiant_id','=',$request->etudiant_id)
                       ->where('stage_id','=',$request->stage_id)->get()->count();
      
       
        if($find<1){
             $demande = new Demande;
        $demande->stage_id =$request->stage_id;
        $demande->etudiant_id =Auth::user()->id;
        $demande->entreprise_id  =$request->id_entreprise;


        echo $demande->save();
        return redirect('/dem')->with('sent',' demande envoyée avec succée');
        }
        else return redirect('/dem')->with('msg','cette demande est deja existe');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        $demandes=DB::table('stages')
        ->join('entreprises','entreprises.id','id_entreprise')->where('stages.departement','LIKE','%'.$demande.'%')
          ->paginate(5) ;        return view('connect.html.demande',['demandes'=>$demandes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {   //$demande->id=37;
       // dd($demande);
        $demande->delete();
     
        return redirect()->route('demandesList')->with('success','demande supprimé avec succée');
    }
    
    

}
