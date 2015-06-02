<?php
	include("../config/koneksi.php");
	 $query ="delete  from daftar_usaha where id = '".$_GET['id']."'";
	 mysql_query($query);
	
		header("location:data_usaha.php");
	
?>