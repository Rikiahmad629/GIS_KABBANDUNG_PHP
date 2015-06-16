<?php
	session_start();
	include("config/koneksi.php");

	$username = $_POST['no_ktp'];
	$password = $_POST['password'];
	 
 	$sql = "select * from users where no_ktp ='".$username."' and password='".$password."' and active ='1' ";
	$res = mysql_query($sql) or die(mysql_error());
  	mysql_num_rows($res);
	if(mysql_num_rows($res) == 1){
		$data  = mysql_fetch_array($res);
		
		$_SESSION['no_ktp'] = $data['no_ktp'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['alamat'] = $data['alamat'];
		$_SESSION['tanggal_lahir'] = $data['tanggal_lahir'];
		$_SESSION['tempat_lahir'] = $data['tempat_lahir'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['email'] = $data['email'];
		$_SESSION['phone'] = $data['phone'];
		$_SESSION['level'] = $data['level'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['sudahlogin'] = true;		
		 header("location:min/index.php");
	}else{
		header("location:gagallogin.php");
	}
?>
