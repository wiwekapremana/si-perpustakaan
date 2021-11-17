<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fd8370ec87.js" crossorigin="anonymous"></script>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
            </div>
            <div class="d-flex align-items-center">

                <div class="d-flex justify-content-center">
                    <h2 style="margin-right: 300px"> Sistem Informasi Perpustakaan </h2>
                </div>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-category">Main Menu</li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tampilanmahasiswa">
                                <i class="menu-icon typcn typcn-document-text"></i>
                                <span class="menu-title">Data Mahasiswa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tampilanbuku">
                                <i class="menu-icon typcn typcn-shopping-bag"></i>
                                <span class="menu-title">Data Buku</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tampilantransaksi">
                                <i class="menu-icon typcn typcn-th-large-outline"></i>
                                <span class="menu-title">Data Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Page Title Header Starts-->
                    @yield('navigasi')
                    <!-- partial:partials/_footer.html -->
                    {{-- <footer class="footer">
                        <div class="container-fluid clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                bootstrapdash.com 2020</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                    href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                    target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                        </div>
                    </footer> --}}
                    <!-- partial -->

                    <!-- page-body-wrapper ends -->
                </div>
                <!-- container-scroller -->
                <!-- plugins:js -->
                <script src="assets/vendors/js/vendor.bundle.base.js"></script>
                <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
                <!-- endinject -->
                <!-- Plugin js for this page-->
                <!-- End plugin js for this page-->
                <!-- inject:js -->
                <script src="assets/js/shared/off-canvas.js"></script>
                <script src="assets/js/shared/misc.js"></script>
                <!-- endinject -->
                <!-- Custom js for this page-->
                <script src="assets/js/demo_1/dashboard.js"></script>
                <!-- End custom js for this page-->
                <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
                <!-- Custom js for this page-->
                <script src="{{ URL::asset('assets/js/demo_1/dashboard.js') }}"></script>
                <!-- End custom js for this page-->
                <script src="{{ URL::asset('assets/js/shared/jquery.cookie.js') }}" type="text/javascript"></script>

</body>

</html>