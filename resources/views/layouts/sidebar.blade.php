<div class="sidebar active">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name">
                <img src="img/logo.png" alt="" srcset="" class="logo2" /> Find It
            </div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <img src="img/youssef_farhat.jpg" alt="" />
                <div class="name_job">
                    <div class="name">{{ Auth::user()->name }}</div>
                    <div class="job">Adminstrateur</div>
                </div>
            </div>
            <i class="bx bx-log-out" id="log_out"></i>
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
                <i class="bx bxs-user bx-tada-hover"></i>
                <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
        </li>
        <li>
            <a href="#">
                <i class="bx bxs-bell bx-tada-hover"> </i>
                <span class="links_name">Accueil</span>
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
                <i class="bx bxs-city bx-tada-hover"></i>
                <span class="links_name">Entreprise </span>
            </a>
            <span class="tooltip">Entreprises</span>
        </li>
        <li>
            <a href="#">
                <i class="bx bxs-user-rectangle bx-tada-hover"></i>
                <span class="links_name">Etudiants </span>
            </a>
            <span class="tooltip">Etudiants</span>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-cog bx-tada-hover"></i>
                <span class="links_name">Setting</span>
            </a>
            <span class="tooltip">Setting</span>
        </li>
    </ul>
</div>
