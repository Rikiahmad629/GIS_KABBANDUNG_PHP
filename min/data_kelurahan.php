   <?php include("../template/header_admin.php");?>

  <body>
 	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include("../template/menu_atas_admin.php");?>
    </div>
 	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <?php $data_menu = "kelurahan";?>
            <?php include("../template/menu_samping_admin.php");?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<br> <a class="btn btn-primary" href="form_tambah_kelurahan.php">Tambah Kelurahan </a>
        	 <h2>Data Kelurahan di Bandung Barat</h2>
				<div class="table-responsive">
			  <table class="display" id="table-data-kelurahan"  cellspacing="0" width="54%">
			    <thead>
			      <tr>
			        <th width="7%">No</th>
			        <th width="30%">ID Kelurahan</th>
			        <th width="35%">Nama Kelurahan</th>
			      	<th width="28%">Option</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php   
			    if($_SESSION['level'] === "DINAS"){
			    	$query = "select * from kelurahan 		
								where IDKecamatan in ('31897','31914','31922','31931','31945','31958','31970','31983','31994','32008','32019','32031','32046','32055','32067')";
			    }else{
			    	echo ("data tidak ditemukan");	
			    }
			    
			    $data_query = mysql_query($query) or die(mysql_error());
			    $i = 1;
			    while($data = mysql_fetch_array($data_query)){
			    ?>
			      <tr>
			        <td><?php echo $i;?></td>
			        <td><?php echo $data['IDKelurahan'];?></td>
			        <td><?php echo $data['Nama'];?></td>
			        <td><a href="form_edit_kelurahan.php?id=<?php echo $data['IDKelurahan'];?>">Edit</a>  
			        	<a onClick="if(!confirm('Apakah Anda Yakin menghapus data usaha ini?')) return false;"href="proses_delete_kelurahan.php?id=<?php echo $data['IDKelurahan'];?>">Delete</a>
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
