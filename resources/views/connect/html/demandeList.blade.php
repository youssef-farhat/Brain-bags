@extends('connect.html.nav')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('custom/css/demandesListStyle.css')}}">
    <div class="container ">

        {{-- @php
        
        dump($demandes);
        die;
        @endphp --}}
        <div class="card-deck ">
            @foreach ($demandes as $demande)
                <div class="card m-2">
                    {{-- <img src="{{ $demande->image }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">Stage :{{ $demande->type }} Departement {{ $demande->departement }}</h5>
                        <p class="card-text">{{ $demande->description }} </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{ $demande->created_at }} </small>
                    </div>
                    <div class="card-footer text-center  ">
                        <a class="btn btn-outline-dark btn-block col-m-6 " href="{{ $demande->id }}"> <i class="fas fa-edit"></i>Modifier </a>
                        <a class="btn btn-outline-danger btn-block col-m-6 " href="{{route('delete',$demande->id )}}" onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();"><i class="fa fa-window-close"></i> Annuler </a>
                            <form id="delete-form"  action="{{ route('demande.destroy',$demande->id ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        </form>
                    
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
