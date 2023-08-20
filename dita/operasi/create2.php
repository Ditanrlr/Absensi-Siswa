<?php 

$Nama_lengkapErr = $JurusanErr = $KelasErr = $WaktuErr = $TanggalErr = $KehadiranErr = "";
if(isset($_POST['save']))
{
    $Nama_lengkap = mysqli_real_escape_string($connect, $_POST['Nama_lengkap']);
    $Jurusan = mysqli_real_escape_string($connect, $_POST['Jurusan']);
    $Kelas = mysqli_real_escape_string($connect, $_POST['Kelas']);
    $Waktu = mysqli_real_escape_string($connect, $_POST['Waktu']);
	  $Tanggal = mysqli_real_escape_string($connect, $_POST['Tanggal']);
    $KehadiranErr = mysqli_real_escape_string($connect, $_POST['Kehadiran']);
    

    


    $query = "INSERT INTO absen (Nama_lengkap,Jurusan,Kelas,Waktu,Tanggal,Kehadiran) VALUES ('$Nama_lengkap','$Jurusan','$Kelas','$Waktu', '$Tanggal', '$KehadiranErr')";

    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = " Created Successfully";
    }
    else
    {
        $_SESSION['message'] = "Not Created";
    }
}


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h4>FORM ABSENSI SMAN 6 GARUT</h4>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">ABSENSI</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>
            <div class="container">
   	 <div class="row">
                  <!-- left column -->
    <div class="col-md-6">
                    <!-- general form elements -->
   	<div class="card card-primary">
    		<div class="card-header">
        <h3 class="card-title">ABSENSI</h3>
   			 </div>
          <form role="form" action="" method="post">
    			<div class="card-body">
				<div class="form-group">
       			 <label for="inputNama_lengkap">Nama_lengkap</label>
     		 	  <input type="text" name="Nama_lengkap" class="form-control" id="inputNama_lengkap" maxlength="40" required autofocus>
              <small class="text-danger"><?= $Nama_lengkapErr == "" ? "":"* $Nama_lengkapErr " ?></small>
          </div>
        		<div class="form-group">
       			 <label for="inputJurusan">Jurusan</label>
        		<input type="Jurusan" name="Jurusan" class="form-control" id="inpuJurusan" maxlength="30" required>
            <small class="text-danger"><?= $JurusanErr == "" ? "":"* $JurusanErr" ?></small>
				</div>
				<div class="form-group">
				<label for="inputKelas">Kelas</label>
				<input type="Kelas" name="Kelas" class="form-control" id="inputKelas" maxlength="30" minlength="3" required>
        <small class="text-danger"><?= $KelasErr == "" ? "":"* $KelasErr" ?></small>
				</div>
				<div class="form-group">
				<label for="Waktu">Waktu</label>
				<input type="time" name="Waktu" class="form-control" id="inputWaktu" maxlength="50" required>
        <small class="text-danger"><?= $WaktuErr == "" ? "":"* $WaktuErr" ?></small>
				</div>
				<div class="form-group">
				<label for="inputTanggal"> Tanggal </label>
				<input type="date" name="Tanggal" class="form-control" id="inputTanggal" maxlength="40" required autofocus>
        <small class="text-danger"><?= $TanggalErr == "" ? "":"* $TanggalErr " ?></small>
				</div>
				<div>
				<label for="inputKehadiran">Kehadiran</label><br>
				<small class="text-danger"><?= $KehadiranErr == "" ? "":"* $KehadiranErr " ?></small>
				<input type="radio" name="Kehadiran" value="Hadir"> Hadir <br>
				<input type="radio" name="Kehadiran" value="Izin"> Izin <br>
				<input type="radio" name="Kehadiran" value="Tanpa keterangan"> Tanpa keterangan <br>
				</div>
				<input type="submit" class="btn btn-dark m-1" name="save" value="Save Now!">
				</form>
			</div>
  