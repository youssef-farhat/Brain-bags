<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('custom/css/styleprofil.css')}}">
    <link rel="stylesheet" href="{{asset('custom/css/SidebarStyle.css')}}">
    <title>profile</title>
</head>
<body>
    @include('layouts.sidebareE')
    <img src="../img/avatar1.jpg" alt="">
  
    
    <div class="zonePE">
      
    <div class="para2">
      <p><span style="color:blue ;font-weight:bold">Email:</span>  {{Auth::user()->email}}</p>
      <p><span style="color:blue ;font-weight:bold">Nom et Prenom: </span>{{Auth::user()->name}}</p>
      <p> <span style="color:blue ;font-weight:bold">Département:</span> {{$etudiant[0]->depe_E}}</p>
      <p> <span style="color:blue ;font-weight:bold">Classe:</span>      {{$etudiant[0]->class_E}}  </p>
      <p><span style="color:blue ;font-weight:bold">Ville:</span> {{$etudiant[0]->ville_E}}</p>
      <p><span style="color:blue ;font-weight:bold">dernier changement :</span> {{$etudiant[0]->updated_at}}</p>

    </div>
  </div>
  <div id="btn1">
    <a href="/Etudiant/{{ Auth::user()->email }}/edit"><input type="submit" class="btn btn-primary" value="Modifer"></a>
  </div>
    <div id="btn2">  
     <a href="https://www.cv.fr/?gclid=Cj0KCQjw78yFBhCZARIsAOxgSx06DdV5X2-4czlYaiAgVI4YHMU2iUdHjR9xXM5p1tqN1s5KLQcqlW0aAgFyEALw_wcB"> <input type="submit" value="Votre cv"  class="btn btn-success"></a>
    </div>
  
    
  </div>
      </div>
    </div>
    
  <script src="{{asset('custom/js/Sidebar.js')}}"></script>
  <script src="{{asset('custom/js/bootstrap.min.js')}}"></script>
  
</body>
</html>