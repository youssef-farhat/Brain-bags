<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!--Style -->

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">


    <!--boostrap-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <title>Entreprise</title>
</head>

<body>
    {{-- ---------------------------------------------- Navigation ---------------------------------------------- --}}
    @include('layouts.sidebar')
    {{-- ---------------------------------------------- Page Content ---------------------------------------------- --}}
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
            <div class="row">
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
            <div class="card mb-4">
                <div class="card-header">
                    <i class="bx bx-table"></i>
                    Table Entreprise
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>image</th>
                                    <th>nom prenom </th>
                                    <th>email</th>
                                    <th>department</th>
                                    <th>Ville</th>
                                    <th>descption</th>
                                    <th>mdp</th>
                                    <th>action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($etudiants as $etudiant)
                                    <tr>
                                        <td> <img src="{{ $etudiant->img }}" style="width: 8vw; border-radius: 12px;"
                                                alt=""></td>
                                        <td>{{ $etudiant->nom_prenom_E }}</td>
                                        <td>{{ $etudiant->E_mail }}</td>
                                        <td>{{ $etudiant->depar_E }}</td>
                                        <td>{{ $etudiant->ville_E }}</td>
                                        <td>{{ $etudiant->description }}</td>
                                        <td>{{ $etudiant->motp_E }}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger"><a
                                                    onclick="return confirm('supprimer?')"> <i
                                                        class='bx bx-trash bx-sm'></i></a></button>
                                            <button type="button" class="btn btn-primary"><a
                                                    onclick="return confirm('modifier?')"><i
                                                        class='bx bx-pencil bx-sm'></i></button>
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


    !--js-->




    <script src="{{ asset('js/admin.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="http://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>




    {{-- ---------------------------------------------- Probleme ---------------------------------------------- --}}
    <!-- database -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

    <!-- chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>


</body>

</html>
