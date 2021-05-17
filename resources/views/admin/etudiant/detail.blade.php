@extends('layouts.admin')

@section('main')
<div class="home_content">
    <div class="container">
        <div class="text">
            <h2>Etudiant</h2>
        </div>
        <div class="card-deck">
            <div class="card text-center">
                <div class="card-header">
                  <strong>Nom de l'etudiant </strong> : {{ $etudiant->nom_prenom_E }}
                </div>
                <div class="card-img-top">
                    <img style="width: 25%;margin-top: 23px;border-radius: 8px;" src="{{ $etudiant->img }}">

                </div>
                <div class="card-body  ">
                    <div class="card-title form-row d-flex justify-content-center">
                  <p >  Email : <strong>{{ $etudiant->E_mail }}</strong> </p>
                 </div>

                 
                
                  <p class="card-text">Departement :  <strong> {{ $etudiant->departement }}</strong></p>
                  <p class="card-text">Ville :  <strong> {{ $etudiant->ville_E }} </strong></p>
                  <p class="card-text">Description :  <strong> {{ $etudiant->description }}</strong></p>
                </div>
                <div>
                    <button type="button" class="btn btn-warning" style="margin-bottom: 5px;"><a
                        onclick="return confirm('modifier?')"><i
                           class='bx bx-pencil bx-sm' style="color:black;"></i></button>
    
               <button type="button" class="btn btn-danger" style="margin-bottom: 5px;"><a
                       onclick="return confirm('supprimer?')"> <i
                           class='bx bx-trash bx-sm' style="color:black;"></i></a></button>
                  </div>
              
                <div class="card-footer text-muted">
                    <p class="card-text">ce compte a été créé le  <strong> {{ $etudiant->created_at }}</strong></p>
                </div>
                
              </div>

           
    
        </div>

    </div>
</div>


    
@endsection
