@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('cssstage/app.css')}}" />
    <link rel="stylesheet" href="{{asset('custom/cssstage/demandeStyle.css')}}" />
    <link rel="stylesheet" href="navbar/css/style.css">
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


    <form method="POST" action="{{ route('ajoutstage') }}">
    @csrf
<div class="container">
      <div class="blockinp">
        <div class="text"><h1>Ajout d'un offre</h1></div>
        <br>
        <br>
        
    

        <div class="row">
            <div class="col-sm" class="in" style="margin-bottom: 18px;">
                <select clas aria-label=".form-select-lg example"  class="form-control input" name="type" required>
                  <option disabled selected hidden>Type de Stage</option>
                  <option value="Initiation">Initiation</option>
                  <option value="Perfectionnement">Perfectionnement</option>
                  <option value="Pfe">pfe</option>
                </select>
              </div>
            <div class="col-sm" class="in" style="margin-bottom: 18px;">
                <select clas aria-label=".form-select-lg example" class="form-control input" name="departement" required>
                  <option disabled selected hidden >Département</option>
                  <option value="Informatique">Informatique</option>
                  <option value="mechanique">mechanique</option>
                  <option value="electrique">electrique</option>
                  <option value="Economie_gestion">Economie_gestion</option>
                  <option value="Genie_proceder">Genie_proceder</option>
                </select>
              </div>
              
          
              <div class="col-sm" class="in" style="margin-bottom: 18px;">
                <input type="date" class="form-control input" name="date" required/>
              </div>
        </div>
      </div>
      <div class="mb-2">
        <div class="row">
            
              
              <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="Localisation" name="localisation" required/>
              </div>

              <div class="col-sm" class="in">
              <div class="form-check" name="paiment">
                <input value="payée" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked>
                <label class="form-check-label" for="flexRadioDefault1" value="non payée">
                  payée
                </label>
                </div>
              <div class="form-check">
                <input value="non payée" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                  non payée
                </label>
              </div>
            </div>
        </div>
      </div>
      
      <div class="mb-3">
        <textarea
          class="form-control textera"
          id="exampleFormControlTextarea1"
          rows="3"
          placeholder="Description"
          name="description"
          required
        ></textarea>
      </div>
    
        
        <input type="submit" value="envoyer" class="btn btn-primary">
        <input type="reset" value="Annuler" class="btn btn-danger">
      
    
      </div>
      </form>
@endsection