<?php
session_start();
	include("../config/koneksi.php");
    $nama=$_POST['Nama'];
	$id = $_POST['IDSektor'];
                
		$query = " update sektor set Nama ='$nama' where IdSektor='$id'";
		mysql_query($query) or die(mysql_error());
	if($query){
?>
<script>alert("data berhasil diubah");
window.location.href="data_sektor.php"</script>
<?php } else { ?>
<script>alert("data gagal diubah");
window.location.href="form_edit_sektor.php"</script>
<?php } ?>
