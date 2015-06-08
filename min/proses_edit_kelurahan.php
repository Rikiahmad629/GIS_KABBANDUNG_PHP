<?php
session_start();
	include("../config/koneksi.php");
    $Nama=$_POST['Nama'];
	$id = $_POST['IDKelurahan'];
                
		$query = " update kelurahan set Nama ='$Nama' where IDKelurahan='$id'";
		mysql_query($query) or die(mysql_error());
	if($query){
?>
<script>alert("data berhasil diubah");
window.location.href="data_kelurahan.php"</script>
<?php } else { ?>
<script>alert("data gagal diubah");
window.location.href="form_edit_kelurahan.php"</script>
<?php } ?>
