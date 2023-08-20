<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $Nama_lengkap = mysqli_real_escape_string($con, $_POST['Nama_lengkap']);
    $Jurusan = mysqli_real_escape_string($con, $_POST['Jurusan']);
    $Kelas = mysqli_real_escape_string($con, $_POST['Kelas']);
    $waktu = mysqli_real_escape_string($con, $_POST['waktu']);

    $query = "UPDATE students SET Nama_lengkap='$Nama_lengkap', Jurusan='$Jurusan', Kelas='$Kelas', waktu='$waktu' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save']))
{
    $Nama_lengkap = mysqli_real_escape_string($con, $_POST['Nama_lengkap']);
    $Jurusan = mysqli_real_escape_string($con, $_POST['Jurusan']);
    $Kelas = mysqli_real_escape_string($con, $_POST['Kelas']);
    $Waktu = mysqli_real_escape_string($con, $_POST['Waktu']);
	$Tanggal = mysqli_real_escape_string($con, $_POST['Tanggal']);
    $Kehadiran = mysqli_real_escape_string($con, $_POST['Kehadiran']);

    $query = "INSERT INTO absensi (Nama_lengkap,Jurusan,Kelas,Waktu,Tanggal,Kehadiran) VALUES ('$Nama_lengkap','$Jurusan','$Kelas','$Waktu', '$Tanggal', '$Kehadiran')";

    $query_run = mysqli_query($connect, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>