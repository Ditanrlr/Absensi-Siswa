<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HOME | Dita Nurul Ramadhan</title>
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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                JADWAL
              </p>
            </a></li>
          <li class="nav-item has-treeview">
                <a href="absen.html" class="nav-link">
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
        <a href="laporan.php" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>LAPORAN ABSENSI</p>
        </a>
  </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                
                <a href="../keluar.php"  class="nav-link" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
                
                </a>
              </li>
             
            </ul>
          </li>
          
         
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php 

$delete_id = $_GET['id'];
$query = "DELETE FROM user WHERE id='$delete_id'";

if(mysqli_query($connect, $query)){
	$_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data telah terhapus</div>";
}else{
	$_SESSION['flash'] = "<div class=\"alert alert-danger\" role=\"alert\">Data gagal terhapus</div>";
}
echo "<script>window.location='".$WEB_CONFIG["base_url"]."';</script>";?>

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
    <strong>Dita Nurul Ramadhan  <a href="http://adminlte.io"></a></strong>
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
<script type="text/javascript" src="assets1/script.js"></script>
	<script type="text/javascript" src="assets1/bootstrap/bootstrap.min.js"></script>
  
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</body>
<script src="plugins/chart.js/Chartt.js"></script>
</html>