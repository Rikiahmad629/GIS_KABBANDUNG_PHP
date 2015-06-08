<?php
	include("../config/koneksi.php");
	 $query ="delete  from sektor where IDSektor = '".$_GET['id']."'";
	 mysql_query($query);
	 echo "data berhasil dihapus";
	
		header("location:data_sektor.php");
	
?>
