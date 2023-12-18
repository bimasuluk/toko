<?php

//yang ada di dalam kurung (server,username,password,nama_database)

$server = "localhost";

$user = "root";

$password = "";

$namaDB = "db_toko_online";

$con = mysqli_connect($server, $user, $password, $namaDB);

if(!$con){
   echo "koneksi berhasil";
}







?>