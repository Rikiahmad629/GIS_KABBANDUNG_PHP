<?php
	include("../config/koneksi.php");
	 $query ="delete  from sektor where IDSektor = '".$_GET['IDSektor']."'";
	 mysql_query($query);
	 echo "data berhasil dihapus";
	
		header("location:data_sektor.php");
	
?>
