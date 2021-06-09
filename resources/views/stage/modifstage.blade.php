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
          <a href="{{ route('ajoutstage')}}" class="btn btn-outline-primary">
                                <i class='bx bxs-user-plus bx-sm' ></i> Ajouter un offre 
                            </a>
            <div class="row">
            
                            
              <!-- <div class="col-sm" class="in">
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
                <select clas aria-label=".form-select-lg example"  class="form-control input">
                  <option disabled selected hidden>Type de Stage</option>
                  <option value="1">Initiation</option>
                  <option value="2">Perfectionnement</option>
                  <option value="3">pfe</option>
                </select>
              </div> -->
            </div>
          </div>

          <br>
          <br>
          <br>

        

        {{-- @php
        dump($stages);
        die;
        @endphp --}}

        @foreach ($stages as $stage)
        <div class="blockinp2">
            <div class="grid-container">
                <div class="item1">
                    <p> Stage {{ $stage->type }} a {{ $stage->localisation }}</p>
                    <p>le {{ $stage->date }}</p>
                    <p>Département {{ $stage->departement}}</p>
                    <p class="desc">Description:</p>
                    <p>{{ $stage->description }}</p>
            
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('stage.edit',$stage->id) }}"class="btn btn-outline-primary"> Modifer</a>
                    
                    
                    <form action="{{ route('stage.destroy',$stage->id) }}" method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <a   onclick="event.preventDefault();
                                                 document.querySelector('#delete-form').submit()" class="btn btn-outline-danger btn-block col-m-6 " href="{{route('deletestage',[ 'id'=>$stage->id ])}}">
                        <i class="fa fa-window-close"></i> Supprimer
                        </a>
                        
                        </form>

                    </div>
                </div>
                <div class="item2">
                    <img src="custom/img/instructor-helping-students-in-computer-class.jpg " class="rounded float-end" >
                </div>
            </div>    
        </div>
            
    
    @endforeach
    </div>
@endsection