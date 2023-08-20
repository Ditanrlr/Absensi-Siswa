<?php require 'config.php'; ?>
<?php session_start();
      $content = (isset($_GET["page"])) ? $_GET["page"] : ""; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ABSENSI SMA NEGERI 6 GARUT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>

            
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <div class="image">
          <img src="dist/img/sma6.jfif" alt="Image" height="28" width="28" class="img-circle elevation-2">
          <span class="brand-text font-weight-light" >ABSENSI SMAN 6 GARUT </span>
        </div>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/icon.jfif" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMIN </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
          <li class="nav-item has-treeview">
            <a href="index.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                HOME
              </p>
            </a></li>
          <li class="nav-item has-treeview">
            <a href="jadwal.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                JADWAL
              </p>
            </a></li>
          <li class="nav-item has-treeview">
                <a href="absen.php" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>ABSENSI</p>
                </a>
          </li>
          <li class="nav-item has-treeview">
                <a href="dataSiswa.php" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>DATA SISWA</p>
                </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="dataGuru.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>DATA GURU & STAFF</p>
            </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="laporanAbsen.php" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>LAPORAN ABSENSI</p>
        </a>
  </li>
  <li class="nav-item has-treeview">
    <a href="../keluar.php"  class="nav-link" onclick="return confirm('Apakah anda yakin ingin logout?')">
      <i class="nav-icon fas fa-sign-out-alt"></i>
      <p>LOGOUT</p>
    </a>
          </li>
             
            </ul>
          </li>
          
         
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
  <div class="content-wrapper">
            <!-- Main content -->
                        <?php
                        if(isset($_SESSION['flash'])){
                            echo $_SESSION['flash'];
                            unset($_SESSION['flash']);
                        }
            
                        switch ($content) {
                            case 'add':
                                require 'operasi/createjadwal.php';
                                break;
                            case 'delete':
                                require 'operasi/deletejadwal.php';
                                break;
                            case 'update':
                                require 'operasi/updatejadwal.php';
                                break;
                            default:
                                require 'operasi/readjadwal.php';
                                break;
                        } ?>
                        </div>
                    </div>
                </div>
                    

  <!-- Content Wrapper. Contains page content -->

        <!-- /.row -->

            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>SMA NEGERI 6 GARUT  <a href="http://adminlte.io"></a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="plugins/chart.js/Chartt.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
<script src="plugins/chart.js/Chartt.js"></script>
</html>
