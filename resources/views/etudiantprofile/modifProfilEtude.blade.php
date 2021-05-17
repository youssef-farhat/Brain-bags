<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('custom/css/SidebarStyle.css')}}" />
    <link rel="stylesheet" href="{{asset('custom/css/ModifProfil.css')}}">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"rel="stylesheet"/>
   <link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}">
    <title>Side bar</title>
  </head>
  <body>
    {{-- <div class="sidebar active">
      <div class="logo_content">
        <div class="logo">
          <div class="logo_name">
            <img src="../img/logo.png" alt="" srcset="" class="logo2" /> Find It
          </div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <div class="profile_content">
        <div class="profile">
          <div class="profile_details">
            <img src="../img/fb.jpg" alt="" />
            <div class="name_job">
              <div class="name">ahmed</div>
              <div class="job">Etudiant</div>
            </div>
          </div>
          <i class="bx bx-log-out " id="log_out"></i>
        </div>
      </div>
      <ul class="nav_list">
        <li>
          <a href="#">
            <i class="bx bx-list-ul bx-tada-hover"></i>
            <span class="links_name">Accueil</span>
          </a>
          <span class="tooltip">Liste de stages</span>
        </li>
        <li>
            <a href="profil.html">
                <i class='bx bxs-user bx-tada-hover' ></i>
              <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
          </li>
        <li>
            <a href="#">
                <i class='bx bxs-bell bx-tada-hover'> </i>
              <span class="links_name">notification </span>
            </a>
            <span class="tooltip">Liste de stages</span>
          </li>
        <li>
          <a href="#">
            <i class="bx bx-paste bx-tada-hover"></i>
            <span class="links_name">Mes Demandes </span>
          </a>
          <span class="tooltip">Demande de stages</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-city bx-tada-hover'></i>
              <span class="links_name">Entreprise </span>
            </a>
            <span class="tooltip">Entreprises</span>
          </li>
          <li>
            <a href="#">
                <i class='bx bxs-user-rectangle bx-tada-hover' ></i>
              <span class="links_name">Etudiants </span>
            </a>
            <span class="tooltip">Etudiants</span>
          </li>
        <li>
          <a href="#">
            <i class="bx bx-cog bx-tada-hover "></i>
            <span class="links_name">Setting</span>
          </a>
          <span class="tooltip">Setting</span>
        </li>
      </ul>
    </div> --}}
    @include('layouts.sidebareE')
    <div class="home_content">
      <div class="container">
        <div class="text">
          <h2>Modifier Profile</h2>
          <i class="fas fa-city"></i>
      
          <div class="blockinp">
            <div class="row">
              <div class="col-sm" class="in">
                <input type="text" class="form-control input" value="{{Auth::user()->email}}" />
              </div>
              <div class="col-sm" class="in">
                <input type="text" class="form-control input" value="{{Auth::user()->name}}"/>
              </div>
              <div class="col-sm" class="in">

                <input type="text" class="form-control input" value="{{Auth::user()->role}}" >
            </div>
              
            </div>
          </div>
          <div class="blockinp2">
            <div class="row">
                <div class="col-sm" class="in" class="option">
                  <input type="text" class="form-control input" value="{{Auth::user()->ville_E}}" name="ville_E" />

                  </div>
              <div class="col-sm" class="in" class="option">
                <select clas aria-label=".form-select-lg example"  class="form-control input" >
                  <option selected >Département</option>
                  <option value="1">ti</option>
                  <option value="2">mec</option>
                  <option value="3">com</option>
                  <option value="4">ele</option>
                  <option value="5">ya4ort</option>
                </select>
              </div>
               <div class="col-sm" class="in" class="option">
                <select clas aria-label=".form-select-lg example"  class="form-control input" >
                  <option selected >Classe</option>
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
                <input type="text" class="form-control input" placeholder="mot de passe"/>
              </div>
              <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="Confirmer le mot de passe" />
              </div>
             
            </div>
          </div>
          
          
            <div class="btne">
            <input type="submit" value="envoyer" class="btn btn-primary">
            <input type="reset" value="Annuler" class="btn btn-danger">
          </div>
          </div>
          </div>
      
    </div>
    
    <i class="fas fa-city"></i>

    <script src="{{asset('custom/js/Sidebar.js')}}"></script>
  </body>
</html>
