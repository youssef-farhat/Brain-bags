


  <div class="sidebar active">
    <div class="logo_content">
      <div class="logo">
        
        <div class="logo_name"><img src="{{asset('dalistyle/img/logo.png')}}" alt="" srcset="" class="logo2"> Find It</div>
      </div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <div class="profile_content">
      <div class="profile">
        <div class="profile_details">
          <img src="{{asset('dalistyle/img/download.png')}}" alt="" />
          <div class="name_job">
            <div class="name"><a href="{{url('profil')}}">{{Auth::user()->name}}</a></div>
            <div class="job">Entreprise Devlepement</div>
          </div>
        </div>
        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        <i class="bx bx-log-out" id="log_out"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
        
      </div>
    </div>
    <ul class="nav_list">
      <li>
        <a href="#">
          <i class="bx bx-message-square-add"></i>

          <span class="links_name">Ajuter un stage</span>
        </a>
        <span class="tooltip">Ajouter un stage</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Liste de stages</span>
        </a>
        <span class="tooltip">Liste de stages</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-paste"></i>
          <span class="links_name">Demande de stages</span>
        </a>
        <span class="tooltip">Demande de stages</span>
      </li>

      <li>
        <a href="{{url('updateE') }}">
          <i class="bx bx-cog"></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
    </ul>
  </div>
 
