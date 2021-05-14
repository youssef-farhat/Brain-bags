<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}">
    <link href="{{asset('https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"rel="stylesheet')}}"/>
    <link rel="stylesheet" href="{{asset('custom/css/styleprofil.css')}}">
    <link rel="stylesheet" href="{{asset('custom/css/SidebarStyle.css')}}">
    <title>profile</title>
</head>
<body>
    
    <div class="sidebar active">
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
              <div class="name"> {{ Auth::user()->name }}</div>
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
            <a href="#">
                <i class='bx bxs-user bx-tada-hover' ></i>
              <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
          </li>
        <li>
            <a href="#">
                <i class='bx bxs-bell bx-tada-hover'> </i>
              <span class="links_name">notification</span>
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
            <i class="bx bx-cog bx-tada-hover "></i>
            <span class="links_name">Setting</span>
          </a>
          <span class="tooltip">Setting</span>
        </li>
      </ul>
    </div>
    <div class="home_content">
      <div class="container">
        <div class="text">
          <h2>Profil</h2>
          <i class="fas fa-city"></i>
      <img src="../img/fb.jpg" alt="" class="img2">
    <div class="zonePE">
      
    <div class="para2">
      <p>Email:</p>
      <p>Nom et Prenom:</p>
      <p>Age:</p>
      <p>Département:</p>
      <p>Classe:</p>
      <p>Ville:</p>
    </div>
  </div>
  <div id="btn1">
    <a href="{{route('modifprofE')}}"><input type="submit" class="btn btn-primary" value="Modifer"></a>
  </div>
    <div id="btn2">  
      <input type="submit" value="Votre cv"  class="btn btn-success">
    </div>
  
    
  </div>
      </div>
    </div>
    
  <script src="{{asset('custom/js/Sidebar.js')}}"></script>
  <script src="{{asset('custom/js/bootstrap.min.js')}}"></script>
</body>
</html>