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
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>nom enseignant </th>
                                    <th>email</th>
                                    <th>departement</th>
                                    <th>ville</th>
                                    <th>action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($enseignants as $key => $enseignant)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td> <img src="{{ $enseignant->image }}" style="width: 8vw; border-radius: 12px;"
                                            alt=""></td>
                                        <td>{{ $enseignant->nom }} {{ $enseignant->prenom }} </td>
                                        <td>{{ $enseignant->email }}</td>
                                        <td>{{ $enseignant->departement }}</td>
                                        <td>{{ $enseignant->ville }}</td>
                                        <td>



                                            <button type="button" class="btn btn-info" style="margin-bottom: 5px;"> <a
                                                   href="/enseignants/{{ $enseignant->id }}" onclick="return "><i class='bx bxs-user-detail bx-sm' style="color:black;"></i></button>

                                            <button type="button" class="btn btn-warning" style="margin-bottom: 5px;"><a
                                                    onclick="return confirm('modifier?')"><i
                                                        class='bx bx-pencil bx-sm' style="color:black;" ></i></button>

                                            <button type="button" class="btn btn-danger" style="margin-bottom: 5px;"><a
                                                    onclick="return confirm('supprimer?')"> <i
                                                        class='bx bx-trash bx-sm' style="color:black;"></i></a></button>



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
