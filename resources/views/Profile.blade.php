<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('custom/css/styleprofil.css') }}" />
    <link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />


    <title>Profile Admin</title>
</head>

<body>

    <div class="sidebar active">
        <div class="logo_content">
            <div class="logo">

                <div class="logo_name"><img src="img/logo.png" alt="" srcset="" class="logo2"> Find It</div>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="img/youssef_farhat.jpg" alt="" />
                    <div class="name_job">
                        <div class="name">youssef</div>
                        <div class="job">DSI21</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </div>
        </div>
        <ul class="nav_list">
            <li>
                <a href="Accueil.jsp">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Accueil</span>
                </a>
                <span class="tooltip">Liste de stages</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-paste"></i>
                    <span class="links_name">Mes Demandes </span>
                </a>
                <span class="tooltip">Demande de stages</span>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
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
            </div>

            <div class="block" style="margin:auto;display:block;">
                <div style="margin:auto;display:block;">
                    <img src="img/youssef_farhat.jpg" style="" class="img">
                    <h1 style="text-align:center;margin:15px">Youssef Farhat</h1>
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