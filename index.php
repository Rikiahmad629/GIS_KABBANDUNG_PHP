  <?php include("template/header.php");?>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <?php include("template/menu.php");?>
    </div>

    <div class="container">
      <div class=" col-sm-12">
        <div class="col-sm-4">
          <select class="form-control" id="id_kecamatan">
            <option>Select Kecamatan</option>

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
