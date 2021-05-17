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
            <form action="{{-- route('store') --}}" method="POST">
                @csrf
                <div class="container">
                    
                    <div class="blockinp">
                        <div class="row">
                            <div class="col-sm" class="in">
                                <input type="text" class="form-control input" placeholder="Nom " name="Nom" />
                            </div>
                            <div class="col-sm" class="in">
                                <input type="text" class="form-control input" placeholder="Prenom" name="Prenom" />
                            </div>
                            <div class="col-sm" class="in">

                                <input type="text" class="form-control input" @error('email') is-invalid @enderror
                                    placeholder="exemple@domaine.com" name="email" />
                            </div>
                           
                        </div>
                    </div>
                    <div class="blockinp2" style="padding-right: 0px;!important">

                        <div class="row">
                            <div class="col-sm" class="in" class="option">
                                <input type="text" class="form-control input" placeholder="ville" name="ville_E" />
                            </div>
                            <div class="col-sm" class="in">

                                <select clas aria-label=".form-select-lg example" class="form-control input" name="role">
                                    <option value="admin">admin</option>
                                    <option value="Etudiant">Etudiant</option>
                                    <option value="enseignant">enseignant</option>

                                </select>
                            </div>
                     
                            <div class="col-sm" class="in" class="option">
                                <select clas aria-label=".form-select-lg example" class="form-control input" name="class_E">
                                    <option value="1 ére licence ">1 ére licence</option>
                                    <option value="2 eme licence ">2 éme licence</option>
                                    <option value="3 eme licence ">3 éme licence</option>
                                    <option value="1 ére master ">1 ére master</option>
                                    <option value="2 eme master ">2 éme master</option>

                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="blockinp3" style="padding-right: 0px;!important">
                        <div class="row">
                            <div class="col-sm" class="in">
                                <input type="password" class="form-control input" placeholder="mot de passe"
                                    name="password">
                            </div>
                            <div class="col-sm" class="in">
                                <input type="text" class="form-control input" placeholder="Confirmer le mot de passe"
                                    name="password">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control textera" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Description" name="Description"></textarea>
                    </div>

                    <div>
                        <div class="btne" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;  margin: 67px; margin: 54px; ">
                            <input type="submit" value="envoyer" class="btn btn-primary">
                            <input type="reset" value="Annuler" class="btn btn-danger">
                        </div>
                    </div>
                </div>

                
            </form>
        </div>
    </div>
@endsection
