<?php

	include("../config/koneksi.php");

 	$query = "select * from kelurahan where IDKecamatan =".$_POST['id_kecamatan'];
    $data_query = mysql_query($query);
    while($data = mysql_fetch_array($data_query)){
  ?> 
  <option value="<?php echo $data['IDKelurahan'];?>"><?php echo $data['Nama'];?></option>
  <?php }?>
 