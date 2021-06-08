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
    <title>modifier profile</title>
  </head>
  <body>
    
    
    @include('layouts.sidebareE')
    <div class="home_content">
      <div class="container">
        <div class="text">
          <h2>Modifier Profile</h2>
          <i class="fas fa-city"></i>
      <form action="{{route('updateEt',auth::user())}}" method="POST">
        @csrf
        @method('put')
        
          <div class="blockinp">

            <div class="row">
              <div class="col-sm" class="in">
                <input type="text" class="form-control input" name="email" value="{{Auth::user()->email}}"  />
              </div>
              <div class="col-sm" class="in">
                <input type="text" class="form-control input" name="name" value="{{Auth::user()->name}}"/>
              </div>
              <div class="col-sm" class="in">

                <input type="text" class="form-control input" name="role" value="{{Auth::user()->role}}" readonly>

              </div>
            </div>
          </div>
          <div class="blockinp2">
            <div class="row">
                <div class="col-sm" class="in" class="option">
                  <input type="text" class="form-control input" value="{{$etudiant[0]->ville_E}}" name="ville_E" />

                  </div>
              <div class="col-sm" class="in" class="option">
                <select clas aria-label=".form-select-lg example"  class="form-control input" name="depe_E" >
                  <option value="informatique">informatique</option>
                  <option value="Economie_gestion">Economie_gestion</option>
                  <option value="Genie_proceder">Genie_proceder</option>
                  <option value="mechanique">mechanique</option>
                  <option value="electrique">electrique</option>
                </select>
              </div>
               <div class="col-sm" class="in" class="option">
                <select clas aria-label=".form-select-lg example"  class="form-control input" name="class_E" >
                  <option value="1 ére licence">1 ére ls</option>
                  <option value="1 ére licence">2 éme ls</option>
                  <option value="1 ére licence">3 éme ls</option>
                  <option value="1 ére licence">1 ére ms</option>
                  <option value="1 ére licence">2 éme ms</option>
                  
    
                </select>
              </div>
             
            </div>
          </div>
          <div class="blockinp3">
            <div class="row">
              <div class="col-sm" class="in">
                <input type="password" class="form-control input" placeholder="mot de passe" name="password"/>
              </div>
              <div class="col-sm" class="in">
                <input type="text" class="form-control input" placeholder="Confirmer le mot de passe" name="password"/>
              </div>
             
            </div>
          </div>
          
          
            <div class="btne">
              <a href="/Etudiant/{{ Auth::user()->email }}/edit"> <input type="submit" value="envoyer" class="btn btn-primary"></a>
            <input type="reset" value="Annuler" class="btn btn-danger">
          </div>
        </form>

          </div>
          </div>
      
    </div>
    
    <i class="fas fa-city"></i>

    <script src="{{asset('custom/js/Sidebar.js')}}"></script>
  </body>
</html>
