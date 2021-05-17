@extends('layouts.admin')

@section('main')

    <div class="home_content">
        <div class="container">
            <div class="text">
                <h2>Enseignant</h2>
            </div>
            <div class="row" style="width:105%;">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="bx bx-line-chart"></i>
                            Area Chart
                        </div>
                        <div class="card-body">
                            <canvas id="myAreaChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="bx bxs-bar-chart-alt-2"></i>
                            Bar Chart
                        </div>
                        <div class="card-body">
                            <canvas id="myBarChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4" style="width:103%;">
                <div class="card-header">
                    <i class="bx bx-table"></i>
                    Table Entreprise
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="btne" style="display: flex; flex-wrap: wrap; ">
                            <a href="{{ route('admins.create')}}" class="btn btn-outline-primary">
                                <i class='bx bxs-user-plus bx-sm' ></i> Ajouter un administeur 
                            </a>
                        </div>
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>nom d'administrateurs </th>
                                    <th>email</th>
                                    <th>Role</th>
                                    <th>ville</th>
                                    <th>action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($administrateurs as $key => $administrateur)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td> <img src="{{ $administrateur->image }}" style="width: 8vw; border-radius: 12px;"
                                            alt=""></td>
                                        <td>{{ $administrateur->nom }} {{ $administrateur->prenom }} </td>
                                        <td>{{ $administrateur->email }}</td>
                                        <td>{{ $administrateur->role }}</td>
                                        <td>{{ $administrateur->ville }}</td>
                                        <td>



                                            <button type="button" class="btn btn-info" style="margin-bottom: 5px;"> <a
                                                   href="/admins/{{ $administrateur->id }}" onclick="return "><i class='bx bxs-user-detail bx-sm' style="color:black;"></i></button>

                                            <button type="button" class="btn btn-warning" style="margin-bottom: 5px;"><a 
                                                href="/admins/{{ $administrateur->id }}/edit" onclick="return confirm('modifier?')"><i class='bx bx-pencil bx-sm' style="color:black;" ></i></button>

                                            <button type="button" class="btn btn-danger" style="margin-bottom: 5px;"><a
                                                href=""  onclick="return confirm('supprimer?')"> <i class='bx bx-trash bx-sm' style="color:black;"></i></a></button>
                                                    <form action="{{ route('admins.destroy',['admin' => $administrateur->id]) }}" method="POST" id="delete-admins-form"> @csrf @method('DELETE')</form>


                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection