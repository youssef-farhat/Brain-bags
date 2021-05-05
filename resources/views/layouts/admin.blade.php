<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />




    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css" />
    <!--boostrap-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Style -->

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">


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
                <h2>Entreprise</h2>
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
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>nom de lentreprise </th>
                                    <th>email</th>
                                    <th>domaine</th>
                                    <th>localisation</th>
                                    <th>descption</th>
                                    <th>mdp</th>
                                    <th>action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><a
                                                onclick="return confirm('supprimer?')"> <i
                                                    class='bx bx-trash bx-sm'></i></a></button>
                                        <button type="button" class="btn btn-primary"><a
                                                onclick="return confirm('modifier?')"><i
                                                    class='bx bx-pencil bx-sm'></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                    <td>
                                        <button type="button" class="btn btn-danger">
                                            <a onclick="return confirm('supprimer?')">
                                                <i class='bx bx-trash bx-sm'></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            <a onclick="return confirm('modifier?')">
                                                <i class='bx bx-pencil bx-sm'></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    !--js-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>





    {{-- ---------------------------------------------- Probleme ---------------------------------------------- --}}
    <!-- database -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

    <!-- chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>


</body>

</html>
