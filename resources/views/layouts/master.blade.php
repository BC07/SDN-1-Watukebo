<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDN 1 Watukebo Admin | @yield('title')</title>
    <link rel="Icon" href="{{ asset('assets/img/sd.png') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1fab89 !important;">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard.index') }}" class="brand-link">


                <img src="{{ asset('assets/img/sd.png') }}" alt="ChillZone Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">SDN 1 Watukebo</span>
            </a>

            <!-- ACCOUNT -->
            <a href="{{ route('dashboard.index') }}" class="brand-link">
                <img src="{{ asset('assets/img/pro.png') }}" alt="Admin Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-normal">{{Auth::guard('admin')->user()->name}}</span>


            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}"
                                class="nav-link {{Request::is('/') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p style="color: #fff !important;">
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sambutans.index') }}"
                                class="nav-link {{Request::is('*sambutans*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-box-open"></i>
                                <p style="color: #fff !important;">
                                    Sambutan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('linkdaftars.index') }}"
                                class="nav-link {{Request::is('*linkdaftars*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p style="color: #fff !important;">
                                    Link Pendaftaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('account.index') }}"
                                class="nav-link {{Request::is('*account*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-user"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Admin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tabelsiswa.index') }}" class="nav-link {{Request::is('*tabelsiswa*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Data Siswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('programsekolah.index') }}" class="nav-link {{Request::is('*programsekolah*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Program
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ekstrakurikulers.index') }}" class="nav-link {{Request::is('*ekstrakurikulers*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Ekstrakurikuler
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('galeritentang.index') }}" class="nav-link {{Request::is('*galeritentang*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-images"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Galeri Tentang Kami
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sekolah.index') }}" class="nav-link {{Request::is('sekolah*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-box-open"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Berita Sekolah
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kelasdeskripsi.index') }}" class="nav-link {{Request::is('*kelasdeskripsi*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-school"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Deskripsi Kelas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('siswa.index') }}" class="nav-link {{Request::is('siswa*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Berita Siswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('prestasi.index') }}" class="nav-link {{Request::is('*prestasi*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-star"></i>
                                <p class="font-weight-normal" style="color: #fff !important;">
                                    Prestasi Siswa
                                </p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="{{ route('programsekolah.index') }}" class="nav-link {{Request::is('*programsekolah*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-laptop"></i>
                                <p class="font-weight-normal">
                                    Program
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sekolah.index') }}" class="nav-link {{Request::is('*sekolah*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p class="font-weight-normal">
                                    Berita Sekolah
                                </p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="{{ route('siswa.index') }}" class="nav-link {{Request::is('*siswa*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p class="font-weight-normal">
                                    Berita Siswa
                                </p>
                            </a>
                        </li> -->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->

                <!-- LOGOUT -->
                <div class="container keluar">
                    <div class="container text-center ">
                        <a class="btn" style="background-color: #FF616D; color: #fff" href="{{route('auth.logout')}}" >Logout</a>
                    </div>
                </div>

                <style>
                .keluar {
                    height: auto;
                    position: relative;
                    top: 1%;
                }
                </style>

            </div>
            <!-- /.sidebar -->

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
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
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>$.widget.bridge('uibutton', $.ui.button)</script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('js/demo.js') }}"></script>
    @stack('script')
</body>

</html>