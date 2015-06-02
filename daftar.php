  <?php include("template/header.php");?>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <?php include("template/menu.php");?>
    </div>

    <div class="container">
      <div class="container">
  <div class="blog-header">
      <p class="lead blog-description">Form Pendaftaran</p>
  </div>
  <div class="row"><div id="infoMessage"> </div>
    <div class="col-sm-8 ">
      <form class="form-horizontal" method="POST" action="proses_daftar.php"  enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
          </div>
        </div>
        <div class="form-group">
          <label for="no_ktp" class="col-sm-2 control-label">No KTP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No KTP" required>
          </div>
        </div>
        <div class="form-group">
          <label for="tempat_lahir" class="col-sm-2 control-label">Tempat,Tgl Lahir</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
          </div>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
           <textarea class="form-control" rows="3" id="alamat" name="alamat" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="no_hp" class="col-sm-2 control-label">No HP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone/Rumah">
          </div>
        </div>
        <div class="form-group">
          <label for="file" class="col-sm-2 control-label">Upload KTP</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" id="file" name="fotoktp" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Daftar</button>
          </div>
        </div>
      </form>
    </div> 
  </div><!-- /.row -->
</div><!-- /.container -->
<style>
.form-horizontal .control-label{
   text-align:left !important; 
}
</style>
     </div>  
  </body>
</html>
