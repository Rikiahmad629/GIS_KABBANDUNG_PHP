<?php
session_start();
	include("../config/koneksi.php");
	$IDKelurahan = $_POST['IDKelurahan'];
 	$Nama = $_POST['Nama'];
 	
		 	$query = "insert into kelurahan  (IDKelurahan,Nama) 
		values('".$IDKelurahan."','".$Nama."')";
		$id = mysql_query($query) or die(mysql_error());
		    	mysql_query($query);
			header("location:data_kelurahan.php");
?>
