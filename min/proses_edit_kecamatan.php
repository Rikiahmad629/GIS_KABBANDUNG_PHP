<?php
session_start();
	include("../config/koneksi.php");
    $Nama=$_POST['Nama'];
	$id = $_POST['IDKecamatan'];
                
		$query = " update kecamatan set Nama ='$Nama' where IDKecamatan='$id'";
		mysql_query($query) or die(mysql_error());
	if($query){
?>
<script>alert("data berhasil diubah");
window.location.href="data_kecamatan.php"</script>
<?php } else { ?>
<script>alert("data gagal diubah");
window.location.href="form_edit_kecamatan.php"</script>
<?php } ?>
