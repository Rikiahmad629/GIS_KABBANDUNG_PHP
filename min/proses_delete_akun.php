<?php
	include("../config/koneksi.php");
	 $query ="delete  from users where id = '".$_GET['id']."'";
	 mysql_query($query);
	
		header("location:data_akun.php");
	
?>