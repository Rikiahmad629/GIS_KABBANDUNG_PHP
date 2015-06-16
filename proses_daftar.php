<?php
include("config/koneksi.php");
include("config/function.php");
if($_FILES['fotoktp']['error']==0){
 	$file_type = array("jpg","PNG","jpeg");
 
	$info_path = pathinfo($_FILES['fotoktp']['name']);
	 $extension = $info_path['extension'];
 	//ganti nama pake waktu sekarang
	 $time = time();
 	 $namafilebaru="images/ktp/".$time.".".$extension;

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
 				$query = "insert into users  (nama,no_ktp,tempat_lahir,tanggal_lahir,email,password,alamat,phone,image_ktp,active,level) 
					  values('".$nama."','".$no_ktp."','".$tempat_lahir."','".$tanggal_lahir."','".$email."',
					  '".$password."','".$alamat."','".$phone."','".$namafilebaru."',0,'PEMILIK')";
				mysql_query($query);

				//kirim email
					require 'phpMail/PHPMailerAutoload.php';
					$mail = new PHPMailer;

			         $mail->isSMTP();                                      
			         $mail->Host = 'smtp.gmail.com';  
			         $mail->SMTPAuth = true;                              
			         $mail->Username = 'dummyfazhal@gmail.com';               
			         $mail->Password = 'dummyfazhal22';                          
			         $mail->SMTPSecure = 'tls';                         
			         $mail->Port = 587;                                 

			          
			         $mail->FromName = 'gis.kbb.com';
			         $mail->addAddress($email, 'No Reply');     
			       /*  $mail->addReplyTo('contact@gis.kbb.com', 'No Reply');*/

			        $message = "<html>
							<head>
							   
							</head>
							<body>
							 
							 <table border=0>
							  <tr>
						         	<td>Terima Kasih Telah Mendaftar Di Website GIS.KBB.com, <br>
						            Akun anda atas nama ".$nama." akan segera di aktivasi oleh admin</td>
						        </tr>
							 	</table>
								</body>
								</html>
							 ";
			            // Set email format to HTML

			         $mail->Subject = '[GIS Kab Bandung Barat] Pendaftaran Usaha Atas Nama '.$nama;
			         $mail->Body    = $message;
			         $mail->AltBody = 'This Body';

			         $mail->send();
					
					$message_sms = "Terima Kasih Telah daftar di website kami, akun anda atas nama ".$nama."  akan segera diaktivasi oleh admin";
 			 	 	send_sms($nama,$message_sms,$phone);

			 	?>
			 	 <script type="text/javascript">alert("Sukses Daftar");window.location="index.php"</script>>
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