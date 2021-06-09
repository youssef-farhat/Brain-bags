@extends('layouts.admin')

@section('main')
    <div class="home_content">
        <div class="container">
            <div class="text">
                <h2>Profil {{ Auth::user()->name }} </h2>
            </div>

            <div class="block" style="margin:auto;display:block;">
                <div style="margin:auto;display:block;">
                    <img src="/img/youssef.png" class="img">
                    <h1 style="text-align:center;margin:15px">{{ Auth::user()->name }}</h1>
                    <div class="zone">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                            <div class="col">

                                <h6>Description</h6>
                                <p>
                                    ISET Bizerte
                                </p>
                            </div>
                            <div class="col">
                                <h6>Localisation</h6>
                                <p><span> <i class="fa fa-map-marker" style="color: blue;"></i></span> bizerte</p>

                            </div>
                            <div class="col">
                                <h6>Catégorie<span><i class="fa fa-bars" style="color: blue;"></i></span> </h6>
                                <p>Admin</p>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
