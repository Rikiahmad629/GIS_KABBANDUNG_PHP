<?php  
 function DateToIndo($date){  

        $BulanIndo = array("Januari", "Februari", "Maret",  

                           "April", "Mei", "Juni",  

                           "Juli", "Agustus", "September",  

                           "Oktober", "November", "Desember");  

      

        $tahun = substr($date, 0, 4);  

        $bulan = substr($date, 5, 2);  

        $tgl   = substr($date, 8, 2);  

          

        $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;       

        return($result);  

}

function remove($nama_table,$nama_kolom,$primary,$parameter,$folder){



		$query2=mysql_query("select ".$nama_kolom." from ".$nama_table." where ".$primary."='".$parameter."'");

		while($array=mysql_fetch_array($query2)){

			$fileToRemove = "".$folder."/".$array[''.$nama_kolom.'']."";

			if (file_exists($fileToRemove)) {

				if (@unlink($fileToRemove) === true) {

				}else{

				}

			}else{

			}

		}

		return true;

	}


function send_sms($nama = null,$message = null, $telepon = null){
  
	$userkey="hnyudq"; // userkey lihat di zenziva

	$passkey="1234"; // set passkey di zenziva
 
	$website = "fazhal";
 	$url = "https://reguler.zenziva.net/apps/smsapi.php";
	$curlHandle = curl_init();

	curl_setopt($curlHandle, CURLOPT_URL, $url);

	curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));

	curl_setopt($curlHandle, CURLOPT_HEADER, 0);

	curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);

	curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);

	curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);

	curl_setopt($curlHandle, CURLOPT_POST, 1);

	$results = curl_exec($curlHandle);

	curl_close($curlHandle);
}


 ?>

