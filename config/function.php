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





 ?>

