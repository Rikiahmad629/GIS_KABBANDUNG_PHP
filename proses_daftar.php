<?php
include("config/koneksi.php");
if($_FILES['fotoktp']['error']==0){
 	$file_type = array("jpg","PNG","jpeg");
 
	$info_path = pathinfo($_FILES['fotoktp']['name']);
	 $extension = $info_path['extension'];
 	//ganti nama pake waktu sekarang
 	$namafilebaru="images/".time().".".$extension;

	$is_in_array = in_array($extension,$file_type,true);
 	if($is_in_array){
 		if(move_uploaded_file($_FILES['fotoktp']['tmp_name'],$namafilebaru)==true){
		 	?>
		 	<script>alert("Sukses Daftar");window.location="index.php"</script>
		 	<?php
 		}
	}else{		
		echo "FILE TIDAK DIIJINKAN!!";
	}
}else{
	echo "Penambahan produk gagal karena upload file gambar gagal";
}
 ?>