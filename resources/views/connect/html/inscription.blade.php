<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />

<link
rel="stylesheet"
href="  {{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}"
>
    
        <button class="btn1"><i class="fa fa-arrow-left"></i></button>
   
    <div class="container">
        <div class="text">creation un compte</div>
        <div class="blockinp">
            <div class="row">
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input" placeholder="exemple@domaine.com" />
                </div>
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input" placeholder="Nom et prenom" />
                </div>
                <div class="col-sm" class="in">

                    <input type="file" class="form-control" id="fileim">
                </div>
                <div class="col-sm" class="in" class="option">
                    <select clas aria-label=".form-select-lg example" class="form-control input">
                        <option selected>ville</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="blockinp2">
            <div class="row">
                <div class="col-sm" class="in" class="option">
                    <select clas aria-label=".form-select-lg example" class="form-control input">
                        <option selected>Département</option>
                        <option value="1">ti</option>
                        <option value="2">mec</option>
                        <option value="3">com</option>
                        <option value="4">ele</option>
                        <option value="5">ya4ort</option>
                    </select>
                </div>
                <div class="col-sm" class="in" class="option">
                    <select clas aria-label=".form-select-lg example" class="form-control input">
                        <option selected>Classe</option>
                        <option value="1">1 ére ls</option>
                        <option value="2">2 éme ls</option>
                        <option value="3">3 éme ls</option>
                        <option value="4">1 ére ms</option>
                        <option value="5">2 éme ms</option>

                    </select>
                </div>

            </div>
        </div>
        <div class="blockinp3">
            <div class="row">
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input" placeholder="mot de passe" />
                </div>
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input" placeholder="Confirmer le mot de passe" />
                </div>

            </div>
        </div>
        <div class="mb-3">
            <textarea class="form-control textera" id="exampleFormControlTextarea1" rows="3"
                placeholder="Description"></textarea>
        </div>
      </div>
      
      <div>

        <p>vous avez un compte?<a href="{{ url('con') }}">Se compte</a></p>
        <div class="btne">
        <input type="submit" value="envoyer" class="btn btn-primary">
        <input type="reset" value="Annuler" class="btn btn-danger">
      </div>
      </div>
    
      
    {{-- <div class="foter">

        <img src="{{ asset('custom/img/w4.png') }}" alt="">

    </div> --}}

