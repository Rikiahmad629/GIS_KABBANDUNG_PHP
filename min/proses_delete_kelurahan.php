<?php
	include("../config/koneksi.php");
	 $query ="delete  from kelurahan where IDKelurahan = '".$_GET['IDKelurahan']."'";
	 mysql_query($query);
	
		header("location:data_kelurahan.php");
	
?>
