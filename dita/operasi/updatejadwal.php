<?php
  $PukulErr = $SeninErr = $SelasaErr = $RabuErr = $KamisErr = $JumatErr = "";
if(isset($_POST['save']))
{
  $id = mysqli_real_escape_string($connect, $_GET['id']);
    $Pukul = mysqli_real_escape_string($connect, $_POST['Pukul']);
    $Senin = mysqli_real_escape_string($connect, $_POST['Senin']);
    $Selasa = mysqli_real_escape_string($connect, $_POST['Selasa']);
    $Rabu = mysqli_real_escape_string($connect, $_POST['Rabu']);
	  $Kamis = mysqli_real_escape_string($connect, $_POST['Kamis']);
    $Jumat = mysqli_real_escape_string($connect, $_POST['Jumat']);
    

    $query = "INSERT INTO jadwal (Pukul,Senin,Selasa,Rabu,Kamis,Jumat) VALUES ('$Pukul','$Senin','$Selasa','$Rabu', '$Kamis', '$JumatErr')";
	$query = "UPDATE jadwal SET Pukul='$Pukul', Senin='$Senin', Selasa='$Selasa', Rabu='$Rabu', Kamis='$Kamis', Jumat='$Jumat' WHERE id=$id";
    $query_run = mysqli_query($connect, $query);
    if (mysqli_query($connect, $query)) {
			echo "<div class=\"alert alert-success\" role=\"alert\">Berhasil diubah</div>";
		}else{
			echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal diubah</div>";
		}
    
}
$id = $_GET['id'];
$query = "SELECT * FROM jadwal WHERE id = $id";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

?>

<a href="<?= $WEB_CONFIG['base_url'] ?>jadwall.php" class="btn btn-warning mb-3">
	<svg style="width:20px;height:20px" viewBox="0 0 24 24">
    	<path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
	</svg> Back To Data
</a>

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
       			 <label for="inputPukul">Pukul</label>
     		 	  <input type="time" name="Pukul" class="form-control" id="inputPukul" value="<?= $data['Pukul'] ?>" maxlength="40" required autofocus>
              <small class="text-danger"><?= $PukulErr == "" ? "":"* $PukulErr " ?></small>
          </div>
        		<div class="form-group">
       			 <label for="inputSenin">Senin</label>
        		<input type="Senin" name="Senin" class="form-control" id="inpuSenin" value="<?= $data['Senin'] ?>" maxlength="30" required>
            <small class="text-danger"><?= $SeninErr == "" ? "":"* $SeninErr" ?></small>
				</div>
				<div class="form-group">
				<label for="inputSelasa">Selasa</label>
				<input type="Selasa" name="Selasa" class="form-control" id="inputSelasa" value="<?= $data['Selasa'] ?>" maxlength="30" minlength="3" required>
        <small class="text-danger"><?= $SelasaErr == "" ? "":"* $SelasaErr" ?></small>
				</div>
				<div class="form-group">
				<label for="Rabu">Rabu</label>
				<input type="Rabu" name="Rabu" class="form-control" id="inputRabu" value="<?= $data['Rabu'] ?>" maxlength="50" required>
        <small class="text-danger"><?= $RabuErr == "" ? "":"* $RabuErr" ?></small>
				</div>
				<div class="form-group">
				<label for="inputKamis"> Kamis </label>
				<input type="Kamis" name="Kamis" class="form-control" id="inputKamis" value="<?= $data['Kamis'] ?>" maxlength="40" required autofocus>
        <small class="text-danger"><?= $KamisErr == "" ? "":"* $KamisErr " ?></small>
				</div>
				<div>
				<label for="inputJumat">Jumat</label><br>
				<small class="text-danger"><?= $JumatErr == "" ? "":"* $JumatErr " ?></small>
				<input type="Jumat" name="Jumat" class="form-control" id="inputKamis" value="<?= $data['Jumat'] ?>" maxlength="40" required autofocus>
				</div>
				<input type="submit" class="btn btn-dark m-1" name="save" value="Save Now!">
				</form>
			</div>
</div>
</div>