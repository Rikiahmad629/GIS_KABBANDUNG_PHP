<?php
session_start();
	include("../config/koneksi.php");
	$IDKecamatan = $_POST['id_kecamatan'];
 	$Nama = $_POST['Nama'];
 	$query = "insert into kelurahan  (Nama,IDKecamatan) values('".$Nama."','".$IDKecamatan."')";
	mysql_query($query);
	header("location:data_kelurahan.php");
?>
