<?php

$path = "vendor/almasaeed2010/adminlte/";
require "vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Floress Express</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/style.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/summernote/summernote-bs4.min.css">
    <link rel="shortcut icon" href="<?php echo $path ?>dist/img/logo.png" type="image/x-icon">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                </li>
            </ul>
            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="main.php?page=home" class="brand-link" style="background-color : #eff0f3">
                <img src="<?php echo $path ?>dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text fst-italic" style="color : #001F3F">Flores Express</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar" style="background-color : #eff0f3">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo $path ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="color : #001F3F">Adi Gunawan | Admin</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header" style="color : #001F3F">MENU UTAMA</li>
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="main.php?page=home" class="nav-link" style="color : #001F3F">
                                        <i class="nav-icon fas fa-chart-line" style="color : #001F3F"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="main.php?page=pengiriman-tampil" class="nav-link" style="color : #001F3F">
                                        <i class="nav-icon fas fa-shipping-fast" style="color : #001F3F"></i>
                                        <p>Data Pengiriman</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-header" style="color : #001F3F">MASTER DATA</li>
                        <li class="nav-item">
                            <a href="main.php?page=tujuan-tampil" class="nav-link" style="color : #001F3F">
                                <i class="nav-icon fas fa-city" style="color : #001F3F"></i>
                                <p>
                                    Kota Tujuan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="main.php?page=kat-tampil" class="nav-link" style="color : #001F3F">
                                <i class="nav-icon fas fa-list" style="color : #001F3F"></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="main.php?page=info" class="nav-link" style="color : #001F3F">
                                <i class="nav-icon fas fa-info-circle" style="color : #001F3F"></i>
                                <p>
                                    Info
                                </p>
                            </a>
                        </li>
                        <br><br><br>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link" style="color : #001F3F">
                                <i class="nav-icon fas fa-sign-out-alt" style="color : #001F3F"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

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
            <!-- /.content-header -->

            <!-- Main content -->
            <?php
            require_once "vendor/autoload.php";

            if (isset($_GET['page'])) {
                require $_GET['page'] . ".php";
            } else {
                require "home.php";
            }

            ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://github.com/Adigunawansllhi" style="color : #001F3F">Adigunawansllhi</a>.</strong>
            Sistem Informasi.
            <div class="float-right d-none d-sm-inline-block">
                <b>SI1</b> V/2023
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $path ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo $path ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $path ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo $path ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo $path ?>plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo $path ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo $path ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo $path ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo $path ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo $path ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo $path ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo $path ?>plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo $path ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $path ?>dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo $path ?>dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo $path ?>dist/js/pages/dashboard.js"></script>
</body>

</html>