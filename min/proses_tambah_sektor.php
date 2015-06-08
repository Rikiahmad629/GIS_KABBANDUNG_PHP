<?php
session_start();
	include("../config/koneksi.php");
 	$nama = $_POST['Nama'];
  	$query = "insert into sektor (Nama) values('".$nama."')";
		$id = mysql_query($query) or die(mysql_error());
		    	
			header("location:data_sektor.php");
?>
