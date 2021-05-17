@extends('layouts.admin')

@section('main')
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />
    <div class="home_content">
        <div class="container">
            <div class="text">
                <h2 style="text-align: center; margin-bottom: 51px;">Creation un compte administrateur</h2>
            </div>
            <form action="{{ route('admins.store') }}" method="POST">
                @csrf
                <div class="container">
                    
                    <div class="blockinp" style="margin-bottom: 77px;">
                        <div class="row">
                            <div class="col-sm" class="in">
                                <input type="text" class="form-control input" placeholder="Nom " name="nom" />
                            </div>
                            <div class="col-sm" class="in">
                                <input type="text" class="form-control input" placeholder="Prenom" name="prenom" />
                            </div>
                            <div class="col-sm" class="in">

                                <input type="text" class="form-control input" @error('email') is-invalid @enderror
                                    placeholder="exemple@domaine.com" name="email" />
                            </div>
                           
                        </div>
                    </div>
                    <div class="blockinp2" style="padding-right: 0px;margin-bottom: 44px;">

                        <div class="row">
                            <div class="col-sm" class="in" class="option">
                                <input type="text" class="form-control input" placeholder="ville" name="ville" />
                            </div>
                            <div class="col-sm" class="in">

                                <select clas aria-label=".form-select-lg example" class="form-control input" >
                                    <option value="admin">admin</option>
                                    <option value="Etudiant">Etudiant</option>
                                    <option value="enseignant">enseignant</option>

                                </select>
                            </div>
                     
                            <div class="col-sm" class="in" class="option">
                                <select clas aria-label=".form-select-lg example" class="form-control input" name="role">
                                    <option value="chef de département">chef de département</option>
                                    <option value="enseignant">enseignant</option>
                                    <option value="sous directeur">sous directeur</option>
                                   

                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="blockinp3" style="padding-right: 0px;!important">
                        <div class="row">
                            <div class="col-sm" class="in">
                                <input type="password" class="form-control input" placeholder="mot de passe"
                                    name="mdp">
                            </div>
                            <div class="col-sm" class="in">
                                <input type="password" class="form-control input" placeholder="Confirmer le mot de passe"
                                    name="mdp">
                            </div>

                        </div>
                    </div>
                  

                    <div>
                        <div class="btne" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;  margin: 67px; margin: 54px; ">
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
