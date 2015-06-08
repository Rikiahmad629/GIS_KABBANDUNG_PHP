<?php
	include("../config/koneksi.php");
	$query ="update users set active ='1' where id='".$_GET['id']."'";
	mysql_query($query);
	
	header("location:data_akun.php");
	
?>