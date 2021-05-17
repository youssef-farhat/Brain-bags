<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset ('dalistyle/css/style.css')}}" />
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />
<link rel="icon" href="{{asset('dalistyle/img/download.png')}}" />
<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="  {{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

</head>
<body>
@include('layouts.sidebar')
<div class="home_content">

<div class="container">
    <div class="text">mise à jour de votre compte</div>
    <form method="POST" action="{{route('store')}}">
        @csrf
    <div class="blockinp">
        <div class="row">
            <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="exemple@domaine.com" name="email" value="{{Auth::user()->email}}"/>
            </div>
            <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="Nom d'entreprise" name="nom_entreprise" value="{{Auth::user()->name}}" />
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
                <input type="text" placeholder="Ville" class="form-control input" placeholder="password" name="ville" value="{{Auth::user()->email}}">
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
            <input type="submit" value="Update" class="btn btn-primary">
            <input type="reset" value="Annuler" class="btn btn-outline-primary">
        </div>
    </div>
    </form>
</div>
</div>
<div class="foter">



    <img src="{{ asset('custom/img/w4.png') }}" alt="">

</div>
<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search");

    btn.onclick = function() {
      sidebar.classList.toggle("active");
      if (btn.classList.contains("bx-menu")) {
        btn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        btn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    };
    searchBtn.onclick = function() {
      sidebar.classList.toggle("active");
    };
  </script>
