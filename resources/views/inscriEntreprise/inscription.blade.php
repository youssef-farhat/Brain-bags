<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />

<link rel="stylesheet" href="  {{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

<a href="{{('con') }}"><button class="btn1"><i class="fa fa-arrow-left"></i></button></a>

<div class="container">
    <div class="text">creation un compte</div>
    <form method="POST" action="{{route('store')}}">
        @csrf
    <div class="blockinp">
        <div class="row">
            <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="exemple@domaine.com" name="email"/>
            </div>
            <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="Nom d'entreprise" name="nom_entreprise" />
            </div>
            <div class="col-sm" class="in" class="option">
                <input type="text" placeholder="Catégorie" class="form-control input" placeholder="password" name="Categorie">
            </div>
        </div>
    </div>
    <div class="blockinp">
        <div class="row">
            <div class="col-sm" class="in">
                <input type="text" placeholder="Ville" class="form-control input" placeholder="password" name="ville">
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
                <input type="text" class="form-control input" placeholder="password" name="mdp" />
            </div>
            <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="confirm password" name="CPassword" />
            </div>
            <div class="col-sm" class="in" class="option">

            </div>
        </div>
    </div>


    <div class="mb-3">
        <textarea class="form-control textera" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description"></textarea>
    </div>
    <div>
        <p>vous avez un compte?<a href="con">Se compte</a></p>
        <div class="btne">
            <input type="submit" value="envoyer" class="btn btn-primary">
            <input type="reset" value="Annuler" class="btn btn-outline-primary">
        </div>
    </div>
    </form>
</div>
<div class="foter">



    <img src="{{ asset('custom/img/w4.png') }}" alt="">

</div>