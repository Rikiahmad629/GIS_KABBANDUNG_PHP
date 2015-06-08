  <?php include("template/header.php");
    include("config/koneksi.php");
  ?>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <?php include("template/menu.php");?>
    </div>

    <div class="container">
      <div class=" col-sm-12">
        <div class="col-sm-4">
        <select class="form-control" name="id_kecamatan" id="kecamatan">
              <?php $query = "select * from Kecamatan where IDKabupaten = 31896";
                $data_query = mysql_query($query);
                while($data = mysql_fetch_array($data_query)){
              ?> 
              <option value="<?php echo $data['IDKecamatan'];?>"><?php echo $data['Nama'];?></option>
              <?php }?>
            </select>
        </div>
        <button type="button" class="btn btn-primary" id="filter">Filter</button>
        </div>
        <div class=" col-sm-12">&nbsp;</div>
        <div class=" col-sm-12">
            <div id="map-canvas"></div>
        </div>
     </div>  
  </body>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="js/app.js"></script>
</html>
