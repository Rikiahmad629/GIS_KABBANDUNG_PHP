<?php
include("../config/koneksi.php");
$query2=mysql_query("select  * from gambar_usaha where id='".$_GET['id']."'");

		while($array=mysql_fetch_array($query2)){

			$fileToRemove = "../images/".$array['gambar']."";

			if (file_exists($fileToRemove)) {

				if (@unlink($fileToRemove) === true) {
					mysql_query("delete from gambar_usaha where  id='".$_GET['id']."'");
					header("location:form_edit_usaha.php?id=".$_GET['id_usaha']);
				}else{

				}

			}else{

			}

		}
?>