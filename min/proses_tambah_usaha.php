<?php
session_start();
	include("../config/koneksi.php");
	$nama_usaha = $_POST['nama_usaha'];
 	$produk_utama = $_POST['produk_utama'];
 	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$skala_usaha = $_POST['skala_usaha'];
	$longitude = $_POST['longitude'];
	$latitude = $_POST['latitude'];
	$id_kelurahan = $_POST['id_kelurahan'];
	$sektor_usaha = $_POST['sektor_usaha'];
	$status_upload = true;
	$time = time();
	for ($i=0; $i < count($_FILES['gambar_usaha']['name']); $i++) { 
		$file_name = $_FILES['gambar_usaha']['name'][$i];
		$info_path = pathinfo($_FILES['gambar_usaha']['name'][$i]);
		$extension = $info_path['extension'];
 		$namafilebaru="../images/".$i.$time.".".$extension;
		if(!empty($file_name)){
			if(move_uploaded_file($_FILES['gambar_usaha']['tmp_name'][$i],$namafilebaru)==true){
				
			}else{
				$status_upload = false;
			}
		}
	}
	if($status_upload){
		if($_SESSION['level'] === "DINAS"){
			$id_pengusaha = $_POST['id_pengusaha'];
		}else{
			$id_pengusaha = $_SESSION['id'];
		}
	 	$query = "insert into daftar_usaha  (nama_usaha,user_id,produk_utama,alamat_lengkap,telp,id_kelurahan,latitude,longitude,peta_usaha,skala_usaha,sektor_usaha) 
		values('".$nama_usaha."','".$id_pengusaha."','".$produk_utama."','".$alamat."','".$telp."','".$id_kelurahan."','".$latitude."','".$longitude."',null,'".$skala_usaha."','".$sektor_usaha."')";
		$id = mysql_query($query) or die(mysql_error());
		$id = mysql_insert_id();
		if($id){
			for ($i=0; $i < count($_FILES['gambar_usaha']['name']); $i++) { 
				$info_path = pathinfo($_FILES['gambar_usaha']['name'][$i]);
				$extension = $info_path['extension'];
		 		$namafilebaru=$i.$time.".".$extension;
		 		$query = "insert into gambar_usaha(id_usaha,gambar) values ('".$id."','".$namafilebaru."')";

				mysql_query($query);
			}
			header("location:data_usaha.php");
		}

	}
?>