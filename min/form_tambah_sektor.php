 <?php include("../template/header_admin.php");?>

  <body>
 <style>
      #map-canvas {
        height: 200px;
      
      }
      #message{
        color:red;
      }
    </style>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include("../template/menu_atas_admin.php");?>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php include("../template/menu_samping_admin.php");?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2>Form Tambah Sektor</h2>
         <form class="form-horizontal" method="POST" action="proses_tambah_sektor.php"  enctype="multipart/form-data">
		<div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama Sektor :</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Simpan</button>
          </div>
        </div>
      </form>
        </div>
      </div>
    </div>
  </body>
</html>
