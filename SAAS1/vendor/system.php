<?php
include "konek.php";

if (isset($_POST["form"])){
	$form = $_POST["form"];

	if ($form === "form1") {
		include("index.php");

		$NAMA = $_POST['namadiweb'];
		$KELAS = $_POST['kelasdiweb'];
		$JURUSAN = $_POST['jurusandiweb'];
		$ALAMAT = $_POST['alamatdiweb'];
		$JK = $_POST['jkdiweb'];

		echo $NAMA, $KELAS, $JURUSAN, $ALAMAT, $JK;

		$sql = "insert into tb_siswa(NAMA,KELAS,JURUSAN,ALAMAT,JK)values ('$NAMA', '$KELAS', '$JURUSAN', '$ALAMAT', '$JK')";

		mysqli_query ($con,$sql);

		header("location: ../index.php");

	}elseif 
		($form === "form2"){
		include("edit.php");

		$id = $_GET['id'];
		$eNAMA = $_POST['Enamadiweb'];
		$eKELAS = $_POST['Ekelasdiweb'];
		$eJURUSAN = $_POST['Ejurusandiweb'];
		$eALAMAT = $_POST['Ealamatdiweb'];
		$eJK = $_POST['Ejkdiweb'];

		$edit = "UPDATE tb_siswa SET NAMA='".$eNAMA."', KELAS='".$eKELAS."', JURUSAN='".$eJURUSAN."', ALAMAT='".$eALAMAT."', JK='".$eJK."' WHERE NO=" . $id;

		
		mysqli_query($con,$edit);
		header("location: ../index.php");

	}else {
		echo "tidak ditemukan";
	}
} else {
	echo "tentukan dengan parameter 'form'.";
}






?>





