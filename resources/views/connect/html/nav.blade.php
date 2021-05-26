<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Style.css -->
    <link rel="stylesheet" href="{{ asset('custom/css/navBarStyle.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-mainbg">
        <!-- Logo -->
        <a class="navbar-brand navbar-logo" href="#">Findit</a>
        <!-- Collapse Button -->
       
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <!-- For Styling -->
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <!-- Nav Links -->
                <li class="nav-item active "  test()>
                    <a class="nav-link" href="{{route('index')}}#chart">
                        <i class="fas fa-tachometer-alt ">
                        </i>Home
                    </a>
                </li>
                <li class="nav-item "  >
                    <a class="nav-link" href="#chart">
                        <i class="far fa-address-book">
                        </i>Liste de souahit
                    </a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="{{route('demandesList')}}#chart">
                        <i class="far fa-clone">
                        </i>Recherche 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('demandesList')}}#chart">
                        <i class="far fa-calendar-alt">
                        </i> Mes demandes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#chart">
                        <i class="far fa-chart-bar">
                        </i>Contact Us
                    </a>
                </li>
              
            </ul>

        </div>
        <div class="dropdown">
            @guest
                <a class="btn btn-outline-light dropdown-toggle" href="{{ route('login') }}" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Guest</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                      <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endguest
            
            @auth
                <a class="btn btn-outline-light dropdown-toggle" href="{{ route('login') }}" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>


                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            @endauth

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <!-- Custom Script -->
    <script src="{{ asset('custom/js/navBarScript.js') }}"></script>
</body>

</html>
