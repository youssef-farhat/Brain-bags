@extends('layouts.admin')

@section('main')

    <div class="home_content">
        <div class="container">
            @if(session('update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('update')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
            
            @endif
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
                                    href="/admins/{{ $administrateur->id }}/edit" onclick="return confirm('modifier?')"><i
                                        class='bx bx-pencil bx-sm' style="color:black;"></i></button>
                                        <a href="" class="btn btn-outline-danger"
                                        onclick="event.preventDefault();document.querySelector('#delete-form').submit();"><i class='bx bx-trash bx-sm'
                                        style="color:black;"></i></a>
                                    <form id="delete-form" action="{{ route('admins.destroy', $administrateur->id) }}"
                                        method="post" style="display: none">
                                        @csrf
                                        @method('delete')
                                       
        
                                    </form>

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
