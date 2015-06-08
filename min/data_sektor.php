  <?php include("../template/header_admin.php");?>

  <body>
 	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include("../template/menu_atas_admin.php");?>
    </div>
 	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <?php $data_menu = "sektor";?>
            <?php include("../template/menu_samping_admin.php");?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<br> <a class="btn btn-primary" href="form_tambah_sektor.php">Tambah Sektor</a>
			 <h2>DATA SEKTOR</h2>
			      <div class="table-responsive">
			  <table class="display" id="table-data-sektor"  cellspacing="0" width="41%">
			    <thead>
			      <tr>
			        <th width="7%">No</th>
			        <th width="29%">ID Sektor</th>
			        <th width="38%">Nama Sektor</th>			    	
			      	<th width="26%">Option</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php   
			    if($_SESSION['level'] === "DINAS"){
			    	$query = "select * from sektor order by IDSektor";	
			    }else{
			    	echo ("data tidak ditemukan");	
			    }
			    
			    $data_query = mysql_query($query) or die(mysql_error());
			    $i = 1;
			    while($data = mysql_fetch_array($data_query)){
			    ?>
			      <tr>
			        <td><?php echo $i;?></td>
			        <td><?php echo $data['IDSektor'];?></td>
			        <td><?php echo $data['Nama'];?></td>			
			        <td><a href="form_edit_sektor.php?id=<?php echo $data['IDSektor'];?>">Edit</a>  
			        	<a onClick="if(!confirm('Apakah Anda Yakin ingin menghapus data ini?')) return false;"href="proses_delete_sektor.php?id=<?php echo $data['IDSektor'];?>">Delete</a>
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
