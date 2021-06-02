@extends('layouts.admin')

@section('main')
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />
<div class="home_content">
    <div class="container">
<form action="{{ route('etudiants.update',  $etudiants->id) }}" method="POST">
    @csrf
    @method('put')    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="text" class="form-control input @error('E_mail') is-invalid @enderror" placeholder="Email " name="E_mail"
        value="{{old('nom') ?? $etudiants->E_mail }}" />
        @error('E_mail')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror

      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Nom</label>
        <input type="text" class="form-control input @error('nom') is-invalid @enderror" placeholder="Nom " name="nom"
        value="{{old('nom') ?? $etudiants->nom }}" />
        @error('nom')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>
    </div>
    <div class="form-group">
      <label for="inputAddress">prenom</label>
      <input type="text" class="form-control input @error('prenom') is-invalid @enderror" placeholder="prenom " name="prenom"
      value="{{old('prenom') ?? $etudiants->prenom }}" />
      @error('prenom')
          <div class="text-danger is-invalid">{{$message}}</div>
      @enderror
</div>
    <div class="form-group">
      <label for="inputAddress2">Ville</label>
      <input type="text" class="form-control input @error('ville_E') is-invalid @enderror" placeholder="ville_E " name="ville_E"
      value="{{old('ville_E') ?? $etudiants->ville_E }}" />
      @error('ville_E')
          <div class="text-danger is-invalid">{{$message}}</div>
      @enderror
</div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">classe</label>
        <input type="text" class="form-control input @error('classe_E') is-invalid @enderror" placeholder="classe_E " name="classe_E"
        value="{{old('classe_E') ?? $etudiants->classe_E }}" />
        @error('classe_E')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>
      <div class="form-group col-md-4">
        <label for="inputState">departement</label>
        <select id="inputState" class="form-control  @error('departement') is-invalid @enderror" name="departement">
          <option selected>{{old('departement') ?? $etudiants->departement }}</option>
          <option value="Technologie de linformation">Technologie de linformation</option>
          <option value="Mecanique">Mecanique</option>
          <option value="électrique">électrique</option>
          <option value="Commerce">Commerce</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">mot de passe</label>
        <input type="text" class="form-control input @error('motp_E') is-invalid @enderror" placeholder="motp_E " name="motp_E"
        value="{{old('motp_E') ?? $etudiants->motp_E }}" />
        @error('motp_E')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Confirmer les changements
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
    </div>
</div>
@endsection