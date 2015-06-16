<?php
	include("../config/koneksi.php");
	include("../config/function.php");
	
  $query1 = "select * from users where id=".$_GET['id'];
  $q = mysql_query($query1) or die(mysql_error());
    $data = mysql_fetch_array($q);
    $email = $data['email'];
    $username = $data['no_ktp'];
    $phone = $data['phone'];
	
	 $query ="update users set active ='1' where id='".$_GET['id']."'";
	mysql_query($query);


	require '../phpMail/PHPMailerAutoload.php';
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
		         	<td> Selamat Akun anda dengan NO KTP : ".$username."   telah di aktivasi oleh admin</td>
		        </tr>
			 	</table>
				</body>
				</html>
			 ";
	    // Set email format to HTML

	 $mail->Subject = '[GIS Kab Bandung Barat] Aktivasi Usaha ';
	 $mail->Body    = $message;
	 $mail->AltBody = 'This Body';

	 $mail->send();

	$message_sms = "[GIS Kab Bandung Barat] Selamat Akun anda dengan NO KTP : ".$username."   telah di aktivasi oleh admin";
	 
	send_sms($nama,$message_sms,$phone);
	
	 header("location:data_akun.php");
	
?>