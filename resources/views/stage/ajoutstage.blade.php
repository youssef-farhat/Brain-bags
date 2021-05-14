@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('custom/css/demandeStyle.css')}}" />
    <link rel="stylesheet" href="navbar/css/style.css">
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<div class="container">
      <div class="blockinp">
        <div class="text">Ajout d'un offre</div>
        <br>
        <div class="row">
            <div class="col-sm" class="in">
                <select clas aria-label=".form-select-lg example"  class="form-control input">
                  <option disabled selected hidden>Type de Stage</option>
                  <option value="1">Initiation</option>
                  <option value="2">Perfectionnement</option>
                  <option value="3">pfe</option>
                </select>
              </div>
            <div class="col-sm" class="in">
                <select clas aria-label=".form-select-lg example" class="form-control input">
                  <option disabled selected hidden >Département</option>
                  <option value="1">Technologie de l'information</option>
                  <option value="2">Mecanique</option>
                  <option value="3">électrique</option>
                  <option value="4">Commerce</option>
                  <option value="5">Génie de Procédés</option>
                </select>
              </div>
              
          
              <div class="col-sm" class="in">
                <input type="date" class="form-control input"  />
              </div>
        </div>
      </div>
      <div class="mb-2">
        <div class="row">
            
            <div class="col-sm" class="in">
                
                <input type="file" class="form-control input" placeholder="Image" />
                
              </div>
              
              <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="Localisation" />
              </div>
              <div class="col-sm" class="in">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  payée
                </label>
                </div>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
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
        ></textarea>
      </div>
    
        
        <input type="submit" value="envoyer" class="btn btn-primary">
        <input type="reset" value="Annuler" class="btn btn-danger">
      
    
      </div>
@endsection