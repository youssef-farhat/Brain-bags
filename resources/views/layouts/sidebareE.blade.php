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
            <img src="/img/avatar1.jpg" alt="" />
              <div class="name_job">
              <div class="name"> {{ Auth::user()->name }}</div>
              <div class="job">Etudiant</div>
            </div>
          </div>
          <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                     
                        <i class="bx bx-log-out " id="log_out"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
          
        </div>
      </div>
      <ul class="nav_list">
        <li>
          <a href="{{route('index')}}">
            <i class="bx bx-list-ul bx-tada-hover"></i>
            <span class="links_name">Accueil</span>
          </a>
          <span class="tooltip">Liste de stages</span>
        </li>
        <li>
            <a href="{{route('profileetud')}}">
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

         
    </div>

    <i class="fas fa-city"></i>

    <script src="{{asset('custom/js/Sidebar.js')}}"></script>
    


  </body>
</html>
