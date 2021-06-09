<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />

<link
rel="stylesheet"
href="  {{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}"
>
    
<a href="{{url('login') }}"><button class="btn1"><i class="fa fa-arrow-left"></i></button></a>
   <form action="{{ route('storeEt') }}" method="POST">
    @csrf
    <div class="container">
        <div class="text">creation un compte</div>
        <div class="blockinp">
            <div class="row">
                <div class="col-sm" class="in">
                   
                    <input type="text" class="form-control input @error('email') is-invalid @enderror" placeholder="exemple@domaine.com" name="email"/>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input" placeholder="Nom et prenom" name="name"/>
                </div>
                <div class="col-sm" class="in">

                    <select clas aria-label=".form-select-lg example" class="form-control input" name="role" >
                        
                        <option value="Etudiant">Etudiant</option>
                       
                        
                    </select>
                </div>
                <div class="col-sm" class="in" class="option">
                    <input type="text" class="form-control input @error('ville_E') is-invalid @enderror" placeholder="ville" name="ville_E" />
                    @error('ville_E')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
        </div>
        <div class="blockinp2">
            <div class="row">
                <div class="col-sm" class="in" class="option">
                    <select clas aria-label=".form-select-lg example" class="form-control input" name="depe_E">
                        <option value="informatique">informatique</option>
                        <option value="Economie_gestion">Economie_gestion</option>
                        <option value="Genie_proceder">Genie_proceder</option>
                        <option value="mechanique">mechanique</option>
                        <option value="electrique">electrique</option>
                    </select>
                </div>
                <div class="col-sm" class="in" class="option">
                    <select clas aria-label=".form-select-lg example" class="form-control input" name="class_E">
                        <option value="1 ére licence ">1 ére licence</option>
                        <option value="2 eme licence ">2 éme licence</option>
                        <option value="3 eme licence ">3 éme licence</option>
                        <option value="1 ére master ">1 ére master</option>
                        <option value="2 eme master ">2 éme master</option>

                    </select>
                </div>

            </div>
        </div>
        <div class="blockinp3">
            <div class="row">
                <div class="col-sm" class="in">
                    <input type="password" class="form-control input  @error('password') is-invalid @enderror" placeholder="mot de passe" name="password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input" placeholder="Confirmer le mot de passe" name="password_confirmation">
                </div>

            </div>
        </div>
        <div class="mb-3">
            <textarea class="form-control textera" id="exampleFormControlTextarea1" rows="3"
                placeholder="Description" name="Description"></textarea>
        </div>
      </div>
      
      <div>

        <p>vous avez un compte?<a href="{{ url('con') }}">Se compte</a></p>
        <div class="btne">
        <input type="submit" value="envoyer" class="btn btn-primary">
        <input type="reset" value="Annuler" class="btn btn-danger">
      </div>
      </div>
    </form>
    
      
    {{-- <div class="foter">

        <img src="{{ asset('custom/img/w4.png') }}" alt="">

    </div> --}}

