@extends('connect.html.nav')

@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}" />
<style>
.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    flex-direction: row;
    margin-left: -5px;
    justify-content: end;
}
.rounded{
  float: right;
}
  </style>
<div class="container">
  @foreach ($demandes as $d)
  <div class="card text-center">
   <div class="card-header">
     <strong>Nom d'entreprise</strong> : {{$d->nom_entreprise}}
   </div>
   <div class="card-body  ">
       <div class="card-title form-row d-flex justify-content-center">
     <h5 class="card-title ">Type de stage : <u>{{$d->type}}</u></h5>
    </div>
   
     <p class="card-text">Departement :  <strong> {{$d->departement}}</strong></p>
     <p class="card-text">Localisation :  <strong> {{$d->ville}} , {{$d->localisation}} </strong></p>
     <p class="card-text">Localisation :  <strong> {{$d->description}}</strong></p>
   </div>
     <a class="btn btn-outline-secondary" href="{{ route('store',['idDemande'=>$d->id]) }}" onclick="event.preventDefault();
     document.getElementById('submit-form').submit();">
  <strong> Envoyer votre demande</strong>
 </a>
 
   <div class="card-footer text-muted">
    {{$d->created_at }} 
   </div>
 </div>
<form method="POST" action="{{route('store',['idDemande'=>$d->id])}}" id="submit-form" style="display:none">
  @csrf
  @php
  // var_dump($idDemande);
  // die;
  @endphp

    <div class="form-row">  
        <div class="form-group col-md-4">
        <label for="inputEmail4">numero de stage</label>
        <input type="text" class="form-control" id="id" placeholder="Email" name="stage_id" value="{{$idDemande}}">
      </div>
      <div class="form-group col-md-2">
        <label for="inputPassword4">Nom d'entreprise</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="Nom" name="nom" value="{{$d->nom_entreprise}}">
      </div>
      <div class="form-group col-md-2">
        <img class="rounded float-end" id=""src={{$d->image}} width='150px'height='150px'>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Localisation de stage</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="id_entreprise" value="{{$d->id_entreprise}} " >
    </div>
    <div class="form-group">
      <label for="inputAddress2">Departement</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="etudiant_id" value="{{Auth::user()->id}}">
    </div>
    
     
   
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    @endforeach
    <button type="submit" class="btn btn-outline-success btn-block">Demander</button>
    
  </form>
</div>
  @endsection