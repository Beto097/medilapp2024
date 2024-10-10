<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Historia Clínica</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Historial Clínico de {{$paciente->nombre_paciente}} {{$paciente->apellido_paciente}}</h1>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Generales del paciente
                                            </div>
                                            <!-- Linea Nombre del paciente -->
                                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Nombre:</div>
                                                <div class="text mb-0 font-weight-light text-gray-800" style="margin-left: 5px;">
                                                    {{$paciente->nombre_paciente}} {{$paciente->apellido_paciente}}
                                                </div>
                                            </div>
                                            <!-- Linea Edad del paciente -->
                                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Edad:</div>
                                                <div class="text mb-0 font-weight-light text-gray-800" style="margin-left: 5px;">
                                                    {{\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->age}}
                                                </div>
                                            </div>
                                            <!-- Linea Género del paciente -->
                                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Género:</div>
                                                <div class="text mb-0 font-weight-light text-gray-800" style="margin-left: 5px;">
                                                    @if($paciente->sexo_paciente=="m") Masculino @else Femenino @endif
                                                </div>
                                            </div>
                                            <!-- Linea Fecha de nacimiento del paciente -->
                                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Fecha de Nacimiento:</div>
                                                <div class="text mb-0 font-weight-light text-gray-800" style="margin-left: 5px;">
                                                    {{\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->format('d-m-Y')}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Consultas Recientes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Medico</th>
                                            <th>Historia Clinica</th>
                                            <th>Diagnóstico</th>
                                            <th>Tratamiento</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Medico</th>
                                            <th>Historia Clinica</th>
                                            <th>Diagnóstico</th>
                                            <th>Tratamiento</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($paciente->consultas as $consulta)
                                            <tr>
                                                <td>{{\Carbon\Carbon::parse($consulta->fecha_consulta)->format('d-m-Y')}}</td>
                                                <td>{{$consulta->nombre_medico}}</td>
                                                <td>{{$consulta->historia_clinica}}</td>
                                                <td>{{$consulta->diagnostico}}</td>
                                                <td>{{$consulta->recomendaciones}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>