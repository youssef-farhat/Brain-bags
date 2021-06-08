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
  @include('layouts.sidebarEn')
</body>
</html>