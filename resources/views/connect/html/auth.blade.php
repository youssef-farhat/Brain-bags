<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('custom/css/style.css') }}" />
    <title>Document</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="left-side"></div>
      <div class="right-side">
        <img src="{{ asset('custom/img/logo.png') }}" alt="" srcset="" class="logo" />
        <h3 class="t1">Connecter à votre Compte</h3>
        <div class="form-group">
          <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" name="email"type="email" class="form-control form-control input @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email@exemple.domaine">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="*********" class="form-control form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col">
                                <button type="submit" class="title btn connect">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
          <button class="title btn connect-fb">Se connecter Avec facebook <img src="../img/f.png" alt="" style="width:25px; padding: auto; float: right;margin-left: 5px;"></button>

          <h6 class="link">
            vous n'avez pas de compte ? <a href="{{url('inscriE')}}">Crée un compte</a>
          </h6>
          <h6 class="link">
            vous n'avez pas de compte Etudiant ? <a href="{{url('ins')}}">Crée un compte</a>
          </h6>
        </div>
      </div>
      <!-- <img src="../img/wave.png" alt="" srcset="" class="wave"> -->
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
