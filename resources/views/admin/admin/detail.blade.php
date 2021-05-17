@extends('layouts.admin')

@section('main')
    <div class="home_content">
        <div class="container">
            <div class="text">
                <h2>administrateur</h2>
            </div>
            <div class="card-deck">
                <div class="card text-center">
                    <div class="card-header">
                        <strong>Nom de d'administrateur </strong> :
                        {{ $administrateur->nom . ' ' . $administrateur->prenom }}
                    </div>
                    <div class="card-img-top">
                        <img style="width: 25%;margin-top: 23px;border-radius: 8px;" src="{{ $administrateur->image }}">

                    </div>
                    <div class="card-body  ">
                        <div class="card-title form-row d-flex justify-content-center">
                            <p> Email : <strong>{{ $administrateur->email }}</strong> </p>
                        </div>



                        <p class="card-text">Departement : <strong> {{ $administrateur->role }}</strong></p>
                        <p class="card-text">Ville : <strong> {{ $administrateur->ville }} </strong></p>

                        <div>

                            <button type="button" class="btn btn-warning btn-lg" style="margin-right: 74px;"><a
                                href="/admins/{{ $administrateur->id }}/edit" onclick="return confirm('modifier?')"><i class='bx bx-pencil bx-sm'
                                        style="color:black;"></i></button>

                            <button type="button" class="btn btn-danger btn-lg" ><a
                                    onclick="return confirm('supprimer?')" > <i class='bx bx-trash bx-sm'
                                        style="color:black;"></i></a></button>
                        </div>
                    </div>


                    <div class="card-footer text-muted">
                        <p class="card-text">ce compte a été créé le <strong> {{ $administrateur->created_at }}</strong>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>



@endsection
