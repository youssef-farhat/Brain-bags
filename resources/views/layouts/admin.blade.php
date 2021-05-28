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



    <title>Admin</title>
</head>

<body>

    {{-- ---------------------------------------------- Navigation ---------------------------------------------- --}}
    @include('layouts.sidebar')
    {{-- ---------------------------------------------- Page Content ---------------------------------------------- --}}
  
    @yield('main');







    <script src="{{ asset('js/admin.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="http://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>




    {{-- ---------------------------------------------- Probleme ---------------------------------------------- --}}
    <!-- database -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

    <!-- chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>



</body>

</html>
