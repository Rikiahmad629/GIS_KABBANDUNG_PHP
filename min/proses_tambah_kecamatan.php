<?php
session_start();
	include("../config/koneksi.php");
	$IDKabupaten = $_POST['IDKabupaten'];
 	$Nama = $_POST['Nama'];
 	
		 	$query = "insert into kecamatan  (Nama,IDKabupaten) 
		values('".$Nama."','".$IDKabupaten."')";
		$id = mysql_query($query) or die(mysql_error());
		    	mysql_query($query);
			header("location:data_kecamatan.php");
?>
