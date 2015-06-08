<?php
	include("../config/koneksi.php");
	 $query ="delete from kecamatan where IDKecamatan = '".$_GET['IDKecamatan']."'";
	 mysql_query($query);
	
		header("location:data_kecamatan.php");
	
?>
