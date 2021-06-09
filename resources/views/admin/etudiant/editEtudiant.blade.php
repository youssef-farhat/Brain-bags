@extends('layouts.admin')

@section('main')
<link rel="stylesheet" href="{{ asset('custom/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/style2.css') }}" />
<link rel="stylesheet" href="{{ asset('custom/css/bouton.css') }}" />
<div class="home_content">
  <div class="container">
      @if (\Session::has('success'))
      <div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
          {!! \Session::get('success') !!}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
<form action="{{ route('etudiants.update',  $etudiants[0]->id) }}" method="POST">
    @csrf
    @method('put')
        <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="text" class="form-control input @error('E_mail') is-invalid @enderror" placeholder="Email " name="email"
        value="{{old('email') ?? $etudiants[0]->email }}" /> <input type="text" class="form-control input @error('E_mail') is-invalid @enderror" placeholder="Email " name="oldEmail"
        value="{{old('email') ?? $etudiants[0]->email }}" hidden />
        @error('email')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror

      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Nom</label>
        <input type="text" class="form-control input @error('nom') is-invalid @enderror" placeholder="Nom " name="name"
        value="{{old('name') ?? $etudiants[0]->name}}" />
        @error('name')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>
    </div>

    <div class="form-group">
      <label for="inputAddress2">Ville</label>
      <input type="text" class="form-control input @error('ville_E') is-invalid @enderror" placeholder="ville_E " name="ville_E"
      value="{{old('ville_E')  ?? $etudiants[0]->ville_E }}" />
      @error('ville_E')
          <div class="text-danger is-invalid">{{$message}}</div>
      @enderror
</div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">classe</label>
        <input type="text" class="form-control input @error('classe_E') is-invalid @enderror" placeholder="classe" name="class_E"
        value="{{old('class_E') ?? $etudiants[0]->class_E }}" />
        @error('class_E')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>
      <div class="form-group col-md-4">
        <label for="inputState">departement</label>
        <select id="inputState" class="form-control  @error('departement') is-invalid @enderror" name="depe_E">
          <option selected>{{old('depe_E') ?? $etudiants[0]->depe_E  }}</option>
          <option value="informatique">Technologie de linformation</option>
          <option value="Mecanique">Mecanique</option>
          <option value="électrique">électrique</option>
          <option value="Commerce">Commerce</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">mot de passe</label>
        <input type="password" class="form-control input @error('password') is-invalid @enderror" placeholder="mot de passe " name="password"
        value="{{old('password')  }}" />
        @error('password')
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