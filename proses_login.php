<?php
	session_start();
	include("config/koneksi.php");

	$username = $_POST['no_ktp'];
	$password = $_POST['password'];
	 
 	$sql = "select * from users where no_ktp ='".$username."' and password='".$password."'";
	$res = mysql_query($sql) or die(mysql_error());
  	mysql_num_rows($res);
	if(mysql_num_rows($res) == 1){
		$data  = mysql_fetch_array($res);
		
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = $data['level'];
	 	$_SESSION['sudahlogin'] = true;		
		 header("location:min/index.php");
	}else{
		header("location:gagallogin.php");
	}
?>