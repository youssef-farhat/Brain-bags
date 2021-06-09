@extends('layouts.admin')


@section('main')
    <div class="home_content">
        <div class="container">
            <div class="text">
                <h2>Profil</h2>
                <i class="fas fa-city"></i>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="container">
            <div class="text">
                <h2>Etudiant</h2>
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
                                    <th>nom de l'entreprise </th>
                                    <th>email</th>
                                    <th>domaine</th>
                                    <th>localisation</th>
                                    <th>descption</th>
                                    <th>action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($entreprises as $key => $entreprise)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $entreprise->name }}</td>
                                        <td>{{ $entreprise->email }}</td>
                                        <td>{{ $entreprise->categorie }}</td>
                                        <td>{{ $entreprise->ville }}</td>
                                        <td>{{ $entreprise->description }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info" style="margin-bottom: 5px;"> <a
                                                    href="/entreprises/{{ $entreprise->id }}" onclick="return "><i
                                                        class='bx bxs-user-detail bx-sm' style="color:black;"></i></button>

                                            <button type="button" class="btn btn-warning" style="margin-bottom: 5px;"><a
                                                    href="/entreprises/{{$entreprise->id}}/edit" onclick="return confirm('modifier?')"><i class='bx bx-pencil bx-sm'
                                                        style="color:black;"></i></button>

                                                        <a href="" class="btn btn-outline-danger"
                                                        onclick="event.preventDefault();document.querySelector('#delete-form').submit();"><i class='bx bx-trash bx-sm'
                                                        style="color:black;"></i></a>
                                                    <form id="delete-form" action="{{ route('entreprises.destroy', $entreprise->id) }}"
                                                        method="post" style="display: none">
                                                        @csrf
                                                        @method('delete')
                                                       
                        
                                                    </form>
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
