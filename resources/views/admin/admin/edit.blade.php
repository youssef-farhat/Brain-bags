                {{-- @php
                    dump($admin);
                    die;
                @endphp --}}
@extends('layouts.admin')

@section('main')
    <link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
    <link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />
    <div class="home_content">
        <div class="container">
            <div class="text">
                <h2 style="text-align: center; margin-bottom: 51px;"> Supprimer un compte administrateur</h2>
            </div>
            <form action="{{ route('admins.update',  $admin->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="container">
                    <div class="blockinp" style="margin-bottom: 77px;">
                        <div class="row">
                            <div class="col-sm" class="in">
                                <input type="text" class="form-control input @error('nom') is-invalid @enderror" placeholder="Nom " name="nom"
                                    value="{{old('nom') ?? $admin->nom }}" />
                                    @error('nom')
                                        <div class="text-danger is-invalid">{{$message}}</div>
                                    @enderror

                            </div>
                            <div class="col-sm" class="in">
                                <input type="text" class="form-control input @error('prenom') is-invalid @enderror" placeholder="Prenom" name="prenom"
                                    value="{{ old ('prenom') ?? $admin->prenom }}" />
                                    @error('prenom')
                                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-sm-6" class="in">

                                <input type="email" class="form-control input @error('email') is-invalid @enderror " @error('email') is-invalid @enderror
                                    placeholder="exemple@domaine.com" name="email" value="{{old('email') ?? $admin->email }}" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="blockinp2" style="padding-right: 0px;margin-bottom: 44px;">

                        <div class="row">
                            <div class="col-sm" class="in" class="option">
                                <input type="text" class="form-control input @error('ville') is-invalid @enderror" placeholder="ville" name="ville"
                                    value="{{old('ville') ?? $admin->ville }}" />
                                    @error('ville')
                                    <div class="text-danger is-invalid">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm" class="in">

                                <select clas aria-label=".form-select-lg example" class="form-control input" name>
                                    <option value="admin">admin</option>
                                    <option value="Etudiant">Etudiant</option>
                                    <option value="enseignant">enseignant</option>

                                </select>
                            </div>

                            <div class="col-sm" class="in" class="option">
                                <select clas aria-label=".form-select-lg example" class="form-control input @error('role') is-invalid @enderror" name="role"
                                    value="{{old('role') ?? $admin->role }}">
                                    <option value="chef de département">chef de département</option>
                                    <option value="enseignant">enseignant</option>
                                    <option value="sous directeur">sous directeur</option>


                                </select>
                                @error('role')
                                <div class="text-danger is-invalid">{{$message}}</div>
                            @enderror
                            </div>

                        </div>
                    </div>
                    <div class="blockinp3" style="padding-right: 0px;!important">
                        <div class="row">
                            <div class="col-sm" class="in">
                                <input type="password" class="form-control input @error('mdp') is-invalid @enderror" placeholder="mot de passe" name="mdp"
                                    value="{{old('mdp') ?? $admin->mdp }}">
                                    @error('mdp')
                                    <div class="text-danger is-invalid">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm" class="in">
                                <input type="password" class="form-control input @error('mdp') is-invalid @enderror" placeholder="Confirmer le mot de passe"
                                    name="mdp" value="{{old('mdp') ?? $admin->mdp }}">
                                    @error('mdp')
                                    <div class="text-danger is-invalid">{{$message}}</div>
                                @enderror
                            </div>

                        </div>
                    </div>


                    <div>
                        <div class="btne"
                            style="display: flex; flex-wrap: wrap; justify-content: space-evenly;  margin: 67px; margin: 54px; ">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class='bx bxs-save bx-sm' style="margin-right: 11px;"></i>Envoyer
                            </button>
                            <button type="reset" class="btn btn-outline-danger">
                                <i class='bx bx-window-close bx-sm' style="margin-right: 11px;"></i>Annuler
                            </button>

                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection
