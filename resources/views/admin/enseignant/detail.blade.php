@extends('layouts.admin')

@section('main')
<div class="home_content">
    <div class="container">
        <div class="text">
            <h2>Enseignant</h2>
        </div>
        <div class="card-deck">
            <div class="card text-center">
                <div class="card-header">
                  <strong>Nom de l'enseignant </strong> : {{ $enseignant->nom.' '.$enseignant->prenom }}
                </div>
                <div class="card-img-top">
                    <img style="width: 25%;margin-top: 23px;border-radius: 8px;" src="{{ $enseignant->image }}">

                </div>
                <div class="card-body  ">
                    <div class="card-title form-row d-flex justify-content-center">
                  <p >  Email : <strong>{{ $enseignant->email }}</strong> </p>
                 </div>

                 
                
                  <p class="card-text">Departement :  <strong> {{ $enseignant->departement }}</strong></p>
                  <p class="card-text">Ville :  <strong> {{ $enseignant->ville }} </strong></p>
                  
                </div>
              
                <div>

                    <button type="button" class="btn btn-warning btn-lg" style="margin-right: 74px;"><a
                            href="/admins/{{ $enseignant->id }}/edit" onclick="return confirm('modifier?')"><i
                                class='bx bx-pencil bx-sm' style="color:black;"></i></button>
                                <a href="" class="btn btn-outline-danger"
                                onclick="event.preventDefault();document.querySelector('#delete-form').submit();"><i class='bx bx-trash bx-sm'
                                style="color:black;"></i></a>
                            <form id="delete-form" action="{{ route('admins.destroy', $enseignant->id) }}"
                                method="post" style="display: none">
                                @csrf
                                @method('delete')
                               

                            </form>

                </div>
                <div class="card-footer text-muted">
                    <p class="card-text">ce compte a été créé le  <strong> {{ $enseignant->created_at }}</strong></p>
                </div>
              </div>
    
        </div>

    </div>
</div>


    
@endsection
