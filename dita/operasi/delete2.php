<?php 
include_once "config.php";
include_once "laporanAbsen.php";

$delete_id = $_GET['id'];
$query = "DELETE FROM absen WHERE id='$delete_id'";

if(mysqli_query($connect, $query) or die ("Eror hapus data".mysql_error())){
	$_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data telah terhapus</div>";
}else{
	$_SESSION['flash'] = "<div class=\"alert alert-danger\" role=\"alert\">Data gagal terhapus</div>";
}
echo "<script>window.location='".$WEB_CONFIG["base_url"]."';</script>";