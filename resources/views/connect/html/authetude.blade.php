<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('custom/css/style1.css')}}" />
    <title>Document</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="left-side"></div>
      <div class="right-side">
        <img src="../img/logo.png" alt="" srcset="" class="logo" />
        <h3 class="t1">Connecter à votre Compte</h3>
        <div class="form-group">
          <input
            type="text"
            class="form-control input"
            placeholder="exemple@domaine.com"
          />
          <input
            type="text"
            class="form-control input"
            placeholder="mode de passe"
          />

          <input
            type="submit"
            value="Se connecter"
            class="title btn connect"
            style="text-align: center"
          />
          <a href="" class="q1">Mot de passe oublier?</a>
          <h6 class="link">
            vous n'avez pas de compte ? <a href="{{ url('ins') }}" >Crée un compte</a>
          </h6>
        </div>
      </div>
      <!-- <img src="../img/wave.png" alt="" srcset="" class="wave"> -->
    </div>

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>

