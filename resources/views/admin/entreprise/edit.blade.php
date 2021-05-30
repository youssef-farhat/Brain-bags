@extends('layouts.admin')

@section('main')
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />
<div class="home_content">
    <div class="container">
<form action="{{ route('entreprises.update',  $entreprises->id) }}" method="POST">
    @csrf
    @method('put')    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="text" class="form-control input @error('email') is-invalid @enderror" placeholder="Email " name="email"
        value="{{old('email') ?? $entreprises->email }}" />
        @error('email')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror

      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Nom de l'entraprise</label>
        <input type="text" class="form-control input @error('nom_entreprise') is-invalid @enderror" placeholder="nom_entreprise" name="nom_entreprise"
        value="{{old('nom_entreprise') ?? $entreprises->nom_entreprise }}" />
        @error('nom_entreprise')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>
    </div>
    <div class="form-group">
      <label for="inputAddress">logo</label>
      <input type="text" class="form-control input @error('logo') is-invalid @enderror" placeholder="logo " name="logo"
      value="{{old('logo') ?? $entreprises->logo }}" />
      @error('logo')
          <div class="text-danger is-invalid">{{$message}}</div>
      @enderror
</div>
    <div class="form-group">
      <label for="inputAddress2">Ville</label>
      <input type="text" class="form-control input @error('ville') is-invalid @enderror" placeholder="ville " name="ville"
      value="{{old('ville') ?? $entreprises->ville }}" />
      @error('ville')
          <div class="text-danger is-invalid">{{$message}}</div>
      @enderror
</div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">description</label>
        <input type="text" class="form-control input @error('description') is-invalid @enderror" placeholder="description " name="description"
        value="{{old('description') ?? $entreprises->description }}" />
        @error('description')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>
      <div class="form-group col-md-4">
        <label for="inputState">categorie</label>
        <select id="inputState" class="form-control  @error('categorie') is-invalid @enderror" name="categorie">
          <option selected value="{{old('categorie') ?? $entreprises->categorie }}">{{old('categorie') ?? $entreprises->categorie }}</option>
          <option value="Informatique">Informatique</option>
          <option value="Economie_gestion">Economie_gestion</option>
          <option value="mechanique">mechanique</option>
          <option value="electrique">electrique</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">mot de passe</label>
        <input type="text" class="form-control input @error('motp_E') is-invalid @enderror" placeholder="mot de passe " name="mdp"
        value="{{old('mdp') ?? $entreprises->mdp }}" />
        @error('mdp')
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