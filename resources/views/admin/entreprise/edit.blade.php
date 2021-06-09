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
<form action="{{ route('entreprises.update', $entreprises[0]->id) }}" method="POST">
    @csrf
    @method('put')
        <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="text" class="form-control input @error('email') is-invalid @enderror" placeholder="Email " name="email"
        value="{{old('email') ?? $entreprises[0]->email  }}" />
        @error('email')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror

      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">nom d'entreprise</label>
        <input type="text" class="form-control input @error('nom_entreprise') is-invalid @enderror" placeholder="nom_entreprise" name="nom_entreprise"
        value="{{old('nom_entreprise')  ?? $entreprises[0]->nom_entreprise  }}" />
        @error('nom_entreprise')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>    <div class="form-group col-md-6">
  <label for="inputPassword4">Username</label>
  <input type="text" class="form-control input @error('nom_entreprise') is-invalid @enderror" placeholder="username" name="name"
  value="{{old('nom')  ?? $entreprises[0]->name  }}" />
  @error('nom')
      <div class="text-danger is-invalid">{{$message}}</div>
  @enderror
</div>
    </div>
    <div class="form-group">
      <label for="inputAddress">logo</label>
      <input type="text" class="form-control input @error('logo') is-invalid @enderror" placeholder="logo " name="logo"
      value="{{old('logo')  ?? $entreprises[0]->logo   }}" />
      @error('logo')
          <div class="text-danger is-invalid">{{$message}}</div>
      @enderror
</div>
    <div class="form-group">
      <label for="inputAddress2">Ville</label>
      <input type="text" class="form-control input @error('ville') is-invalid @enderror" placeholder="ville " name="ville"
      value="{{old('ville')  ?? $entreprises[0]->ville }}" />
      @error('ville')
          <div class="text-danger is-invalid">{{$message}}</div>
      @enderror
</div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">description</label>
        <input type="text" class="form-control input @error('description') is-invalid @enderror" placeholder="description " name="description"
        value="{{old('description')  ?? $entreprises[0]->description  }}" />
        @error('description')
            <div class="text-danger is-invalid">{{$message}}</div>
        @enderror
</div>
      <div class="form-group col-md-4">
        <label for="inputState">categorie</label>
        <select id="inputState" class="form-control  @error('categorie') is-invalid @enderror" name="categorie">
          <option selected value="{{old('categorie') ?? $entreprises[0]->categorie }}">{{old('categorie') ?? $entreprises[0]->categorie  }}</option>
          <option value="Informatique">Informatique</option>
          <option value="Economie_gestion">Economie_gestion</option>
          <option value="mechanique">mechanique</option>
          <option value="electrique">electrique</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">mot de passe</label>
        <input type="text" class="form-control input @error('motp_E') is-invalid @enderror" placeholder="mot de passe " name="password"
        value="{{old('password') }}" />
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