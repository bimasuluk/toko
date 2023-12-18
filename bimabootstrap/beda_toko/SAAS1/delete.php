<?php 
include "vendor/konek.php";

$del=$_GET['del'];

$hapus = "DELETE FROM tb_siswa WHERE NO=" . $del;

mysqli_query($con,$hapus);



header("location: index.php");


 ?>