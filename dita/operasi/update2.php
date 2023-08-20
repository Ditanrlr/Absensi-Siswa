<?php
  $Nama_lengkapErr = $JurusanErr = $KelasErr = $WaktuErr = $TanggalErr = $KehadiranErr = "";
if(isset($_POST['save']))
{
  $id = mysqli_real_escape_string($connect, $_GET['id']);
    $Nama_lengkap = mysqli_real_escape_string($connect, $_POST['Nama_lengkap']);
    $Jurusan = mysqli_real_escape_string($connect, $_POST['Jurusan']);
    $Kelas = mysqli_real_escape_string($connect, $_POST['Kelas']);
    $Waktu = mysqli_real_escape_string($connect, $_POST['Waktu']);
	  $Tanggal = mysqli_real_escape_string($connect, $_POST['Tanggal']);
    $Kehadiran = mysqli_real_escape_string($connect, $_POST['Kehadiran']);
    

    $query = "INSERT INTO absen (Nama_lengkap,Jurusan,Kelas,Waktu,Tanggal,Kehadiran) VALUES ('$Nama_lengkap','$Jurusan','$Kelas','$Waktu', '$Tanggal', '$KehadiranErr')";
	$query = "UPDATE absen SET Nama_lengkap='$Nama_lengkap', Jurusan='$Jurusan', Kelas='$Kelas', Waktu='$Waktu', Tanggal='$Tanggal', Kehadiran='$Kehadiran' WHERE id=$id";
    $query_run = mysqli_query($connect, $query);
    if (mysqli_query($connect, $query)) {
			echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil diubah</div>";
		}else{
			echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal diubah</div>";
		}
    
}
$id = $_GET['id'];
$query = "SELECT * FROM absen WHERE id = $id";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

?>
<div class="content-wrapper">

<a href="<?= $WEB_CONFIG['base_url'] ?>laporanAbsen.php" class="btn btn-warning mb-3">
	<svg style="width:20px;height:20px" viewBox="0 0 24 24">
    	<path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
	</svg> Back To Data
</a>


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
                    <h3>FORM ABSENSI SMAN 6 GARUT</h3>
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
     		 	  <input type="text" name="Nama_lengkap" class="form-control" id="inputNama_lengkap" value="<?= $data['Nama_lengkap'] ?>" maxlength="40" required autofocus>
              <small class="text-danger"><?= $Nama_lengkapErr == "" ? "":"* $Nama_lengkapErr " ?></small>
          </div>
        		<div class="form-group">
       			 <label for="inputJurusan">Jurusan</label>
        		<input type="Jurusan" name="Jurusan" class="form-control" id="inpuJurusan" value="<?= $data['Jurusan'] ?>" maxlength="30" required>
            <small class="text-danger"><?= $JurusanErr == "" ? "":"* $JurusanErr" ?></small>
				</div>
				<div class="form-group">
				<label for="inputKelas">Kelas</label>
				<input type="Kelas" name="Kelas" class="form-control" id="inputKelas" value="<?= $data['Kelas'] ?>" maxlength="30" minlength="3" required>
        <small class="text-danger"><?= $KelasErr == "" ? "":"* $KelasErr" ?></small>
				</div>
				<div class="form-group">
				<label for="Waktu">Waktu</label>
				<input type="time" name="Waktu" class="form-control" id="inputWaktu" value="<?= $data['Waktu'] ?>" maxlength="50" required>
        <small class="text-danger"><?= $WaktuErr == "" ? "":"* $WaktuErr" ?></small>
				</div>
				<div class="form-group">
				<label for="inputTanggal"> Tanggal </label>
				<input type="date" name="Tanggal" class="form-control" id="inputTanggal" value="<?= $data['Tanggal'] ?>" maxlength="40" required autofocus>
        <small class="text-danger"><?= $TanggalErr == "" ? "":"* $TanggalErr " ?></small>
				</div>
				<div>
				<label for="inputKehadiran">Kehadiran</label><br>
				<small class="text-danger"><?= $KehadiranErr == "" ? "":"* $KehadiranErr " ?></small>
				<input type="radio" name="Kehadiran" value="Hadir" <?php if($data['Kehadiran']=='Hadir')echo 'checked' ?>> Hadir <br>
				<input type="radio" name="Kehadiran" value="Izin" <?php if($data['Kehadiran']=='Izin')echo 'checked' ?>> Izin <br>
				<input type="radio" name="Kehadiran" value="Tanpa_keterangan" <?php if($data['Kehadiran']=='Tanpa_keterangan')echo 'checked' ?>> Tanpa keterangan <br>
				</div>
				<input type="submit" class="btn btn-dark m-1" name="save" value="Save Now!">
				</form>
			</div>
</div>
</div>