<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    <!--Style -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!--boostrap-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Profile</title>
</head>

<body>
    
    {{-- ---------------------------------------------- Navigation ---------------------------------------------- --}}
    @include('layouts.sidebar')
    

    <div class="home_content">
        <div class="container">
            <div class="text">
                <h2>Profil</h2>
            </div>

            
                <div class="block" style="margin:auto;display:block;">
                    <div style="margin:auto;display:block;">
                        <img src="" class="img">
                        <h1 style="text-align:center;margin:15px">{{ Auth::user()->name }} </h1>
                        <div class="zone">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                <div class="col">
                                    <i class='bx bxs-envelope bx-md' style='color:rgba(88, 110, 253, 1)'></i>
                                    <h3>Email</h3>
                                    <p>
                                        {{ Auth::user()->email }}
                                    </p>
                                </div>
                                <div class="col">
                                    <i class='bx bx-current-location bx-md' style='color:rgba(88, 110, 253, 1)'></i>
                                    <h3>Ville</h3>
                                    <p> </p>
                                </div>
                                <div class="col">
                                    <i class='bx bxs-user-rectangle bx-md' style='color:rgba(88, 110, 253, 1)'></i>
                                    <h3>Role </h3>
                                    <p> </p>
                                </div>
                                <div class="col">
                                    <i class='bx bxs-key bx-md' style='color:rgba(88, 110, 253, 1)'></i>
                                    <h3>mot de passe </h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>


</body>

</html>
