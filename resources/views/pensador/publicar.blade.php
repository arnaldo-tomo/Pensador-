<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pensador</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
           <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item ">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('Pensador.publicar') }}" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Publicar
                                    <i class="right fas fa-angle-left"></i>

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Publicar</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Publicar</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->

                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="card-title">Categorias do pensador</h3>
                                </div>
                                <div class="col-6 ">
                                    <button class="btn btn-default btn-sm float-right" data-toggle="modal"
                                        data-target="#modal-lg"> <i class="fa fa-plus"></i> Criar categoria</button>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="modal-lg">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Criar categoria</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="categoria" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="text" placeholder="Nome da categoria" name="nome"
                                                class="form-control" required>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar
                                                Modal</button>
                                            <button type="submit" class="btn btn-primary">Criar</button>
                                        </div>
                                </div>
                                <!-- /.modal-content -->
                                </form>
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Pensador</th>
                                        <th>Progresso</th>
                                        <th style="width: 40px">Frases</th>
                                        <th style="width: 40px">Opcoes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categoria as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td><a href="conectar{{ $item->id }}">{{ $item->nome }} </a></td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success"
                                                        style="width: {{ count($item->frases) }}%">
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary">{{ count($item->frases) }}%</span></td>
                                            <td>
                                                <a href="" class="badge bg-primary" data-toggle="modal"
                                                    data-target="#modal{{ $item->id }}"
                                                    title="Editar a cetegoria {{ $item->nome }}"><i
                                                        class="fa fa-edit"></i></a>

                                                <a href="" class="badge bg-danger" data-toggle="modal"
                                                    data-target="#delete{{ $item->id }}"
                                                    title="Eliminar a cetegoria {{ $item->nome }}"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>

                                        {{-- Upadte --}}
                                        <div class="modal fade" id="modal{{ $item->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Editar {{ $item->nome }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"> <span
                                                                aria-hidden="true">&times;</span> </button>
                                                    </div>
                                                    <form action="editarcategoria{{ $item->id }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <input type="text" value="{{ $item->nome }}"
                                                                name="nome" class="form-control">
                                                        </div>
                                                        <div class="modal-footer justify-content-between"> <button
                                                                type="button" class="btn btn-default"
                                                                data-dismiss="modal">Fechar</button>
                                                            <button type="submit" class="btn btn-primary">Actulizar
                                                                Categoria</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Delete --}}
                                        <div class="modal  fade custom-opacity" id="delete{{ $item->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">Tens a certeza?, que queres Elimiar {{ $item->nome }}</h6>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"> <span
                                                                aria-hidden="true">&times;</span> </button>
                                                    </div>
                                                    <form action="deletecategoria{{ $item->id }}" method="post">
                                                        @csrf
                                                        <div class="modal-footer justify-content-between"> <button
                                                                type="button" class="btn btn-default"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-danger"> Sim Deletar a categoria  {{ $item->nome }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <tr>
                                            <td>0</td>
                                            <td>sem pesnador</td>
                                            <td>
                                                <div class="progress  progress-xs">
                                                    <div class="progress-bar  progress-bar-danger"
                                                        style="width: 100%"> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-danger">0%</span></td>
                                        </tr>
                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
        </div>


        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- jQuery -->

    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard2.js"></script>
    @if (session('toast'))
        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-start',
                    showConfirmButton: false,
                    timer: 9000
                });

                Toast.fire({
                    icon: 'success',
                    title: "{!! session('toast') !!}"
                })

            });
        </script>
    @endif
</body>

</html>
