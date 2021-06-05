<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />

<link rel="stylesheet" href="  {{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

<a href="{{url('con') }}"><button class="btn1"><i class="fa fa-arrow-left"></i></button></a>

<div class="container">
    <div class="text">creation un compte</div>
    <form method="POST" action="{{route('storeEn')}}">
        @csrf
        <div class="blockinp">
            <div class="row">
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input @error('email') is-invalid @enderror" placeholder="exemple@domaine.com " name="email" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input input @error('name') is-invalid @enderror" placeholder="Nom d'entreprise" name="nom_entreprise" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm" class="in" class="option">
                    <select clas aria-label=".form-select-lg example" class="form-control input" name="categorie">

                        <option value="informatique">informatique</option>
                        <option value="Economie_gestion">Economie_gestion</option>
                        <option value="Genie_proceder">Genie_proceder</option>
                        <option value="mechanique">mechanique</option>
                        <option value="electrique">electrique</option>

                    </select>
                </div>
            </div>
        </div>
        <div class="blockinp">
            <div class="row">
                <div class="col-sm" class="in">
                    <input type="text" placeholder="Ville" class="form-control input input @error('ville') is-invalid @enderror" placeholder="password" name="ville">
                    @error('ville')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm" class="in">
                    <input type="file" class="form-control" id="fileim">
                </div>
                <div class="col-sm" class="in" class="option">
                    <input type="file" class="form-control" id="fileim">
                </div>
            </div>
        </div>

        <div class="blockinp">
            <div class="row">
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input input @error('password') is-invalid @enderror" placeholder="password" name="mdp" />
                
                </div>
                <div class="col-sm" class="in">
                    <input type="text" class="form-control input" placeholder="confirm password" name="" />
                </div>
                <div class="col-sm" class="in" class="option">

                </div>
            </div>
        </div>


        <div class="mb-3">
            <textarea class="form-control textera" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description"></textarea>
        </div>
        <div>
            <span>vous avez un compte?<a href="con">Se compte</a></span>
            <span style="float: right;">
                <input type="submit" value="envoyer" class="btn btn-primary">
                <input type="reset" value="Annuler" class="btn btn-outline-primary">
            </span>
        </div>
    </form>
</div>