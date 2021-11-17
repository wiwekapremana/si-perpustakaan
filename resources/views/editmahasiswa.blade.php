<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fd8370ec87.js" crossorigin="anonymous"></script>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
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
                    {{-- @yield('navigasi') --}}
                </div>
                <!-- container-scroller -->
                <!-- plugins:js -->
                <section>
                    <div class="mb-4 pl-4">
                        <h2>Edit Mahasiswa</h2>
                        <br>
                        @foreach ($mahasiswa as $k)
                            <form action="/update" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $k->id }}">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" required class="form-control" value="{{ $k->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIM</label>
                                        <input type="number" name="nim" required class="form-control" value="{{ $k->nim }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" required class="form-control" value="{{ $k->email }}">
            
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Telepon</label>
                                        <input type="number" name="no" required class="form-control"
                                            value="{{ $k->no_telp }}">
            
                                    </div>
                                    <div class="form-group">
                                        <label for="">Prodi</label>
                                        <input type="text" name="prodi" required class="form-control"
                                            value="{{ $k->prodi }}">
            
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <input type="text" name="jurusan" required class="form-control"
                                            value="{{ $k->jurusan }}">
            
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fakultas</label>
                                        <input type="text" name="fakultas" required class="form-control"
                                            value="{{ $k->fakultas }}">
            
                                    </div>
                                    <div class="row">
                                        <div class="form-group pl-3">
                                            <a href="/tampilan" class="btn btn-danger">Batal</a>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
            
                </section>
              
               
             <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
            <script src="/assets/vendors/js/vendor.bundle.addons.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page-->
            <!-- End plugin js for this page-->
            <!-- inject:js -->
            <script src="/assets/js/shared/off-canvas.js"></script>
            <script src="/assets/js/shared/misc.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page-->
            <script src="/assets/js/demo_1/dashboard.js"></script>
            <!-- End custom js for this page-->
            <script src="/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
            <!-- Custom js for this page-->
            <script src="assets/js/demo_1/dashboard.js"></script>
            <!-- End custom js for this page-->
            <script src="/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
                
</body>
</html>
