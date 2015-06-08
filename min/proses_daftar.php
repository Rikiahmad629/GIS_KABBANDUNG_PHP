<?php
include("../config/koneksi.php");
if($_FILES['fotoktp']['error']==0){
 	$file_type = array("jpg","PNG","jpeg");
 
	$info_path = pathinfo($_FILES['fotoktp']['name']);
	 $extension = $info_path['extension'];
 	//ganti nama pake waktu sekarang
	 $time = time();
 	 $namafilebaru="../images/ktp/".$time.".".$extension;

	$is_in_array = in_array($extension,$file_type,true);
 	if($is_in_array){
 		$nama = $_POST['nama'];
 		$no_ktp = $_POST['no_ktp'];
 		$tempat_lahir = $_POST['tempat_lahir'];
 		$tanggal_lahir = $_POST['tanggal_lahir'];
 		$email = $_POST['email'];
 		$password = $_POST['password'];
 		$alamat = $_POST['alamat'];
 		$phone = $_POST['no_hp'];
 		
 		if(move_uploaded_file($_FILES['fotoktp']['tmp_name'],$namafilebaru)==true){
 			$namafilebaru = $time.".".$extension;
 			$query1 = "select * from users where no_ktp = '".$no_ktp."'";
 			$data = mysql_query($query1);
 			$jumlah = mysql_num_rows($data);
 			if($jumlah > 0){
 				?>
			 	 <script type="text/javascript">alert("Gagal No KTP sudah ada");history.back();</script>>
			 	<?php	
 			}else{
 				$query = "insert into users  (nama,no_ktp,tempat_lahir,tanggal_lahir,email,password,alamat,phone,image_ktp,active) 
					  values('".$nama."','".$no_ktp."','".$tempat_lahir."','".$tanggal_lahir."','".$email."',
					  '".$password."','".$alamat."','".$phone."','".$namafilebaru."',0)";
				mysql_query($query);
			 	?>
			 	 <script type="text/javascript">alert("Sukses Daftar");window.location="data_akun.php"</script>>
			 	<?php	
 			}
 			
 		}
	}else{		
		echo "FILE TIDAK DIIJINKAN!!";
	}
}else{
	echo "Penambahan produk gagal karena upload file gambar gagal";
}
 ?>