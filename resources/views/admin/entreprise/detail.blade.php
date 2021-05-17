@extends('layouts.admin')

@section('main')
<div class="home_content">
    <div class="container">
        <div class="text">
            <h2>Entreprise</h2>
        </div>
        <div class="card-deck">
            <div class="card text-center">
                <div class="card-header">
                  <strong>Nom de l'entreprise </strong> : {{$entreprise->nom_entreprise}}
                </div>
                <div class="card-body  ">
                    <div class="card-title form-row d-flex justify-content-center">
                  <p >  Email : <strong>{{$entreprise->email}}</strong> </p>
                 </div>
                
                  <p class="card-text">Categorie :  <strong> {{$entreprise->categorie}}</strong></p>
                  <p class="card-text">Ville :  <strong> {{$entreprise->ville}} </strong></p>
                  <p class="card-text">Description :  <strong> {{ $entreprise->description }}</strong></p>
                  <p class="card-text">Logo :  <strong> {{ $entreprise->logo }}</strong></p>
                </div>
              
              
                <div class="card-footer text-muted">
                    <p class="card-text">ce compte a été créé le  <strong> {{ $entreprise->created_at }}</strong></p>
                </div>
              </div>
    
        </div>

    </div>
</div>


    
@endsection
