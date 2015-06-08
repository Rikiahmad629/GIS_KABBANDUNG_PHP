  <?php include("../template/header_admin.php");?>

  <body>
 	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include("../template/menu_atas_admin.php");?>
    </div>
 	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        	<?php $data_menu = "usaha";?>
            <?php include("../template/menu_samping_admin.php");?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<a class="btn btn-primary" href="form_tambah_usaha.php">Tambah Usaha </a>
      		<h2 class="sub-header">Daftar Usaha</h2>
			<div class="table-responsive">
			  <table class="display table table-bordered" id="table-data-akun"  cellspacing="0" width="100%">
			    <thead>
			      <tr>
			        <th>No</th>
			        <th>Nama Usaha</th>
			        <th>Produk Utama</th>
			        <th>Alamat</th>
			          <th>Telp</th>
			        <th>Sektor Usaha</th>
			        <th>Skala Produk</th>
			        <th>Detail</th>
			      	<th>#</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php   
			    if($_SESSION['level'] === "DINAS"){
			    	$query = "select * from daftar_usaha";
			    }else{
			    	$query = "select * from daftar_usaha where user_id = '".$_SESSION['id']."'";	
			    }
			    
			    $data_query = mysql_query($query) or die(mysql_error());
			    $i = 1;
			    while($data = mysql_fetch_array($data_query)){
			    ?>
			      <tr>
			        <td><?php echo $i;?></td>
			        <td><?php echo $data['nama_usaha'];?></td>
			        <td><?php echo $data['produk_utama'];?></td>
			        <td><?php echo $data['alamat_lengkap'];?></td>
			        <td><?php echo $data['telp'];?></td>
			       	<td><?php echo $data['sektor_usaha'];?></td>
			   	<td><?php echo $data['skala_usaha'];?></td>
			   	<td>  <a href="#">Detail</a></td>

			        <td><a href="form_edit_usaha.php?id=<?php echo $data['id'];?>">Edit</a>  
			        	<a onClick="if(!confirm('Apakah Anda Yakin menghapus data usaha ini?')) return false;"href="proses_delete_usaha.php?id=<?php echo $data['id'];?>">Delete</a>
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
