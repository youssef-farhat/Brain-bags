<div class="sidebar active">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name">
                <img src="/img/logo.png" alt="" srcset="" class="logo2" /> Find It
            </div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <img src="/img/youssef.png " alt="" />
                <div class="name_job">
                    <div class="name">{{ Auth::user()->name }}</div>
                    <div class="job">Adminstrateur</div>
                </div>
            </div>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault() ; document.getElementById('logout-form').submit();">
                <i class="bx bx-log-out" id="log_out"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
    </div>
    <ul class="nav_list">
        <li>
            <a href="/entreprise">
                <i class="bx bx-list-ul bx-tada-hover"></i>
                <span class="links_name">Accueil</span>
            </a>
            <span class="tooltip">Accueil</span>
        </li>
        <hr>
        <li>
            <a href="/profile">
                <i class="bx bxs-user bx-tada-hover"></i>
                <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
        </li>
        <li>
            <a href="/admins">
                <i class="bx bxs-user-circle bx-tada-hover"></i>
                <span class="links_name">Administrateurs</span>
            </a>
            <span class="tooltip">Administrateurs</span>
        </li>
        <li>
            <a href="/entreprises">
                <i class="bx bxs-city bx-tada-hover"></i>
                <span class="links_name">Entreprises </span>
            </a>
            <span class="tooltip">Entreprises</span>
        </li>
        <li>
            <a href="/etudiants">
                <i class="bx bxs-user-rectangle bx-tada-hover"></i>
                <span class="links_name">Etudiants </span>
            </a>
            <span class="tooltip">Etudiants</span>
        </li>
        <li>
            <a href="/enseignants">
                <i class="bx bxs-user-rectangle bx-tada-hover"></i>
                <span class="links_name">Enseignants </span>
            </a>
            <span class="tooltip">Enseignants</span>
        </li>
        <hr>
        <li>
            <a href="#">
                <i class='bx bx-news bx-tada-hover'></i>
                <span class="links_name">Stages</span>
            </a>
            <span class="tooltip">Stages</span>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-paste bx-tada-hover"></i>
                <span class="links_name">Demandes de stage </span>
            </a>
            <span class="tooltip">Demande de stages</span>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-spreadsheet bx-tada-hover"></i>
                <span class="links_name">Soutenances </span>
            </a>
            <span class="tooltip">Soutenances</span>
        </li>
        <hr>
    </ul>
</div>
