  <?php include("../template/header_admin.php");?>
<?php
	include("../config/koneksi.php");
?>

  <body>
 	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include("../template/menu_atas_admin.php");?>
    </div>
 	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php include("../template/menu_samping_admin.php");?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<a class="btn btn-primary" href="form_edit_profil.php">Edit Profil</a>
        	 <h2>PROFILE</h2>
			 
			<?php
			
				$link=mysql_connect("localhost","root","");
				mysql_select_db("gis") or die(mysql_error());
				//$link=koneksi_db();
				$sql="SELECT * from users";
				$res=mysql_query($sql,$link) or die(mysql_error());
			?>
			 <div class="table-responsive">
			  		<table width="448" border="1" align="center" bordercolor="black" bgcolor="#999999" style="color:#000000">
						<tr><td colspan=10><center><b>DATA USER</b></center></td></tr>
						<tr>
							<td align="center">Ktp</td>
							<td width="294"> <?php echo $_SESSION['no_ktp'];?></td>
						</tr>
						<tr>
							<td width="138" align="center">Nama</td>
							<td> <?php echo $_SESSION['nama'];?></td>
						</tr>
						<tr>
							<td width="138" align="center">Alamat</td>
							<td><?php echo $_SESSION['alamat'];?></td>
						</tr>
						<tr>
							<td width="138" align="center">Tanggal Lahir</td>
							<td><?php echo $_SESSION['tanggal_lahir'];?></td>
						</tr>
						<tr>
							<td width="138" align="center">Tempat Lahir</td>
							<td><?php echo $_SESSION['tempat_lahir'];?></td>
						</tr>
						<tr>
							<td width="138" align="center">Username</td>
							<td><?php echo $_SESSION['username'];?></td>
						</tr>
						<tr>
							<td width="138" align="center">Password</td>
							<td><?php echo $_SESSION['password'];?></td>
						</tr>
						<tr>
							<td width="138" align="center">Email</td>
							<td><?php echo $_SESSION['email'];?></td>
						</tr>
						<tr>							
							<td width="138" align="center">Telepon</td>
							<td><?php echo $_SESSION['phone'];?></td>
						</tr>
			   </table>
		  </div>
        </div>
      </div>
    </div>

   
   
  </body>
</html>
