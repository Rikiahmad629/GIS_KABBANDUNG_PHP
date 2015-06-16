  <?php include("../template/header_admin.php");?>

  <body>
 	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include("../template/menu_atas_admin.php");?>
    </div>
 	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <?php $data_menu = "akun";?>
            <?php include("../template/menu_samping_admin.php");?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<a class="btn btn-primary" href="form_tambah_user.php">Tambah User </a>
        	<a class="btn btn-primary" href="#">Report XlS</a>
      		<h2 class="sub-header">Daftar User</h2>
			<div class="table-responsive">
			  <table class="display table table table-bordered" id="table-data-akun"  cellspacing="0" width="100%">
			    <thead>
			      <tr>
			        <th>No</th>
			        <th>Nama</th>
			        <th>Email</th>
			        <th>Tempat,Tanggal Lahir</th>
			       	<th>Aktivasi</th>
			      	<th>#</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php   
		 		$query = "select * from users";
			 	$data_query = mysql_query($query) or die(mysql_error());
			    $i = 1;
			    while($data = mysql_fetch_array($data_query)){
			    ?>
			      <tr>
			        <td><?php echo $i;?></td>
			        <td><?php echo $data['nama'];?></td>
			        <td><?php echo $data['email'];?></td>
			        <td><?php echo $data['tempat_lahir'];?></td>
			         
			   	  	<td> <?php if($data['active'] == 0){?> <a href="proses_aktivasi.php?id=<?php echo $data['id'];?>">Aktivasi</a><?php }else{?>Telah Aktif<?php }?></td>

			        <td><!-- <a href="form_edit_akun.php?id=<?php echo $data['id'];?>">Edit</a> -->  
			        	<a onclick="if(!confirm('Apakah Anda Yakin menghapus data usaha ini?')) return false;"href="proses_delete_akun.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
			        </td>
			      </tr>
			      <?php $i++; } ?>
			    </tbody>
			  </table>
			</div>

			         

        </div>
      </div>
    </div>

   
   
  </body>
</html>
