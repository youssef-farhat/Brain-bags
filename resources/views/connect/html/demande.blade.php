@extends('connect.html.nav')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('custom/css/demandeStyle.css') }}" />
    <title>Stage</title>

    <body>
   
        <div class="container">
            <div class="blockinp">
                @if (\Session::has('msg'))
                <div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
                    {!! \Session::get('msg') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  @if (\Session::has('sent'))
                  <div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
                      {!! \Session::get('sent') !!}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                <div class="row">
                    <div class="col-sm" class="in">
                        <select clas aria-label=".form-select-lg example" class="form-control input" id="search">
                            <option disabled selected hidden>Département</option>
                            <option value="Informatique">Technologie de l'information</option>
                            <option value="mechanique">Mecanique</option>
                            <option value="electrique">électrique</option>
                            <option value="Economie_gestion">Commerce</option>
                            <option value="Genie_proceder">Génie de Procédés</option>
                        </select>
                    </div>
                    <div class="col-sm" class="in">
                        <select clas aria-label=".form-select-lg example" class="form-control input"  id="search">
                            <option disabled selected hidden>Type de Stage</option>
                            <option value="initiation">Initiation</option>
                            <option value="perfectionnement">Perfectionnement</option>
                            <option value="pfe">pfe</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="blockinp2">
                @foreach ($demandes as $demande )
                    
                    <div class="grid-container" id="tbody">

                        <div class="item1">



                            <p> {{ $demande->type }}</p>
                            <p>{{ $demande->date }}</p>
                            <p>{{ $demande->departement }}</p>
                            <p class="desc">Description:</p>
                            <p>{{ $demande->description }}</p>
                            @php
                          //  dd($entreprises->name);
                            @endphp
                            {{-- <p> nom entreprise :{{ $entreprises->name }}</p> --}}

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-outline-info"
                                    href="{{route('formm',['idDemande'=>$demande->id])}}"><strong> Plus de Detail ici </strong></a>
                              </div>
                              

                        </div>
                        <div class="item2">
                            <img src="{{ $demande->image }}" class="rounded float-end" width="150px">
                        </div>

                    </div>

                @endforeach
                {{ $demandes->links()}}

            </div>





        </div>
    </body>
    </html>
    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    
@endsection
