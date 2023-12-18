<?php

//untuk memvalidasi inputan pada web dengan field yang ada pada tabel database
session_start();
include "konek.php";

$user = $_POST['namaDiweb'];

$password = $_POST['passwordDiweb'];

//echo $user . $password;

if (empty($user)) {
	$_SESSION['info'] = 'user dan pw tidak boleh kosong';
	header("location: ../log.php");
	exit();
} else{
	if (empty($password)) {
		$_SESSION['info'] = 'user dan pw tidak boleh kosong';
		header("location: ../log.php");
		exit();
	} else{
		//menampung table dalam database
		$sql = "SELECT * FROM tb_akun WHERE EMAIL LIKE '$user' AND PASSWORD LIKE '$password'";

		//mengkoneksikan data base dengan apa yang di panggil
		$cek = mysqli_query($con, $sql);
		//memanggil data pada baris
		$row = mysqli_fetch_assoc($cek);

		if($row ['EMAIL'] === $user && $row ['PASSWORD'] === $password){
			$_SESSION['login'] = true;
		}else{
			$_SESSION['info'] = 'username atau password salah';
			header("location: ../log.php");
		}

		if (isset($_SESSION['login'])){
			header("location: ../index.php");
		}else{
			header("location: ../log.php");
		}
	}
}

//menampung table dalam database
$sql = "SELECT * FROM tb_akun WHERE EMAIL LIKE '$user' AND PASSWORD LIKE '$password'";

//mengkoneksikan data base dengan apa yang di panggil
$cek = mysqli_query($con, $sql);

//memanggil data pada baris
$row = mysqli_fetch_assoc($cek);

if($row ['EMAIL'] === $user && $row ['PASSWORD'] === $password){
	header("location: ../index.php");
}else{
	header("location: ../log.php");
}



