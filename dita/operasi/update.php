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
<?php 
$Nama_lengkapErr = $NISNErr = $AlamatErr = $Tempat_tanggal_lahirErr = $Jenis_kelaminErr = $AgamaErr = "";
if(isset($_POST['save'])){
	if(!isset($_POST['Nama_lengkap']) || !isset($_POST['NISN']) || !isset($_POST['Alamat']) || !isset($_POST['Tempat_tanggal_lahir']) || !isset($_POST['Jenis_kelamin']) ||!$_POST['Agama']){
		if($_POST['Nama_lengkap'] == ""){
		$NamaErr = "Nama_lengkap tidak boleh kosong!";
		}
		if($_POST['NISN'] == ""){
			$NISNErr = "NISN tidak boleh kosong!";
		}
		if($_POST['Alamat'] == ""){
			$AlamatErr = "Alamat tidak boleh kosong!";
		}
		if($_POST['Tempat_tanggal_lahir'] == ""){
			$Tempat_tanggal_lahirErr = "Tempat_tanggal_lahir tidak boleh kosong!";
		}
		if($_POST['Jenis_kelamin'] == ""){
			$Jenis_kelaminErr = "jenis kelamin tidak boleh kosong!";
		}
    if($_POST['Agama'] == ""){
			$AgamaErr = "Agama tidak boleh kosong!";
		}
	}else{
		$id = $_GET['id'];
		$Nama_lengkap = $_POST['Nama_lengkap'];
		$NISN = $_POST['NISN'];
		$Alamat = $_POST['Alamat'];
		$Tempat_tanggal_lahir = $_POST['Tempat_tanggal_lahir'];
		$Jenis_kelamin = $_POST['Jenis_kelamin'];
    $Agama = $_POST['Agama'];

		$query = "INSERT INTO datasiswa (nama_lengkap,NISN,Alamat,Tempat_tanggal_lahir,Jenis_kelamin,Agama) VALUES('$Nama_lengkap', '$NISN', '$Alamat', '$Tempat_tanggal_lahir', '$Jenis_kelamin', '$Agama')";
		$query = "UPDATE datasiswa SET nama_lengkap='$Nama_lengkap', NISN='$NISN', Alamat='$Alamat', Tempat_tanggal_lahir='$Tempat_tanggal_lahir', Jenis_kelamin='$Jenis_kelamin', Agama='$Agama' WHERE id=$id";
		if (mysqli_query($connect, $query)) {
			echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil diubah</div>";
		}else{
			echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal diubah</div>";
		}
	}
}

$id = $_GET['id'];
$query = "SELECT * FROM datasiswa WHERE id = $id";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>dataSiswa.php" class="btn btn-warning mb-3">
	<svg style="width:20px;height:20px" viewBox="0 0 24 24">
    	<path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
	</svg> Back To Data
</a>
<div class="container">
	<form action="" method="post">
		<div class="form-group">
			<label for="inputNama_lengkap">Nama_lengkap</label>
			<input type="text" name="Nama_lengkap" class="form-control" id="inputNama_lengkap" value="<?= $data['Nama_lengkap'] ?>" maxlength="40" required autofocus>
			<small class="text-danger"><?= $Nama_lengkapErr == "" ? "":"* $Nama_lengkapErr " ?></small>
		</div>
		<div class="form-group">
			<label for="inputNISN">NISN</label>
			<input type="NISN" name="NISN" class="form-control" id="inputNISN" value="<?= $data['NISN'] ?>" maxlength="30" required>
			<small class="text-danger"><?= $NISNErr == "" ? "":"* $NISNErr" ?></small>
		</div>
		<div class="form-group">
			<label for="inputAlamat">Alamat</label>
			<input type="Alamat" name="Alamat" class="form-control" id="inputAlamat" value="<?= $data['Alamat'] ?>" maxlength="30" minlength="3" required>
			<small class="text-danger"><?= $AlamatErr == "" ? "":"* $AlamatErr" ?></small>
		</div>
		<div class="form-group">
			<label for="inputTempat_tanggal_lahir">Tempat_tanggal_lahir</label>
			<input type="date" name="Tempat_tanggal_lahir" class="form-control" id="inputTempat_tanggal_lahir" value="<?= $data['Tempat_tanggal_lahir'] ?>" maxlength="50" required>
			<small class="text-danger"><?= $Tempat_tanggal_lahirErr == "" ? "":"* $Tempat_tanggal_lahirErr" ?></small>
		</div>
		<div class="form-group">
			<label for="inputJenis_kelamin">Jenis_kelamin</label>
      <small class="text-danger"><?= $Jenis_kelaminErr == "" ? "":"* $Jenis_kelaminErr " ?></small>
				<input type="radio" name="Jenis_kelamin" value="Laki-laki" <?php if($data['Jenis_kelamin']=='Laki-laki')echo 'checked'?> maxlength="40" required> Laki-laki <br>
				<input type="radio" name="Jenis_kelamin" value="Perempuan" <?php if($data['Jenis_kelamin']=='Perempuan')echo 'checked'?> maxlength="40" required> Perempuan <br>
		</div>
    <div class="form-group">
			<label for="inputAgama">Agama</label>
			<input type="text" name="Agama" class="form-control" id="inputAgama" value="<?= $data['Agama'] ?>" maxlength="40" required>
			<small class="text-danger"><?= $AgamaErr == "" ? "":"* $AgamaErr " ?></small>
		</div>
		<input type="submit" class="btn btn-dark m-1" name="save" value="Update Now!">
	</form>
</div>
</div>
      </div>
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
