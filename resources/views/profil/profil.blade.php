<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Profil {{Auth::user()->name}}</title>
  <link rel="stylesheet" href="{{asset ('dalistyle/css/style.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="{{asset('dalistyle/img/download.png')}}" />
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


</head>

<body>
  @include('layouts.sidebarE')
  <div class="home_content">
    <div class="container">
      <div class="text">
        <h2>Profil</h2>
      </div>

      <div class="block" style="margin:auto;display:block;">
        <div style="margin:auto;display:block;">
          <img src="{{asset('dalistyle/img/download.png')}}" class="img">
          <h1 style="text-align:center;margin:15px">{{Auth::user()->name}}</h1>
          <div class="zone">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
              <div class="col">
                <h6>Description</h6>
                <p>
                  What is Lorem Ipsum?
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
              </div>
              <div class="col">
                <h6>Localisation</h6>
                <p>Ariana,Technopole Al ghazala <span> <i class="fa fa-map-marker" style="color: blue;"></i></span></p>
              </div>
              <div class="col">
                <h6>Catégorie<span><i class="fa fa-bars" style="color: blue;"></i></span> </h6>
              </div>
              <div class="col">
                <div class="btne">
                 <a href="{{url('updateE')}}"> <input type="submit" value="Modifier" class="btn btn-primary"></a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
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
</body>

</html>