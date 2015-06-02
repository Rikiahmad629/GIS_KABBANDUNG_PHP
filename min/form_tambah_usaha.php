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
            <h2>Form Tambah Usaha</h2>
         <form class="form-horizontal" method="POST" action="proses_tambah_usaha.php"  enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama_usaha" class="col-sm-2 control-label">Nama Usaha</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha" required>
          </div>
        </div>
         <?php if($_SESSION['level'] === "DINAS"){?>
        <div class="form-group">
          <label for="nama_usaha" class="col-sm-2 control-label">Nama Pengusaha</label>
          <div class="col-sm-10">
             <select name="id_pengusaha" class="form-control">
             <?php $query = "select * from users where level = 'PEMILIk'";
                $data_query = mysql_query($query);
                while($data = mysql_fetch_array($data_query)){
              ?> 
              <option value="<?php echo $data['id'];?>"><?php echo $data['nama'];?></option>
              <?php }?>
            </select>
          </div>
        </div>
        <?php }?>
        <div class="form-group">
          <label for="produk_utama" class="col-sm-2 control-label">Produk Utama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="produk_utama" name="produk_utama" placeholder="Produk Utama" required>
          </div>
        </div>
         <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Alamat Lengkap</label>
          <div class="col-sm-10">
           <textarea class="form-control" rows="3" id="alamat" name="alamat" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="telp" class="col-sm-2 control-label">Telp</label>
          <div class="col-sm-10">
          <input type="text"  id="telp" name="telp" required> 
          </div>
        </div>
         <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Kecamatan</label>
          <div class="col-sm-10">
            <select class="form-control" name="id_kecamatan" id="kecamatan">
              <?php $query = "select * from Kecamatan where IDKabupaten = 31896";
                $data_query = mysql_query($query);
                while($data = mysql_fetch_array($data_query)){
              ?> 
              <option value="<?php echo $data['IDKecamatan'];?>"><?php echo $data['Nama'];?></option>
              <?php }?>
            </select>
          </div>
        </div>
         <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Kelurahan/Desa</label>
          <div class="col-sm-10">
             <select class="form-control" name="id_kelurahan" id="id_kelurahan" required>
              
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="tempat_lahir" class="col-sm-2 control-label">Skala Usaha</label>
          <div class="col-sm-4">
            <select class="form-control" name="skala_usaha">
              <option value="Kecil">Kecil</option>
              <option value="Menengah">Menengah</option>
              <option value="Besar">Besar</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="sektor_usaha" class="col-sm-2 control-label">Sektor Usaha</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="sektor_usaha" name="sektor_usaha" placeholder="Sektor Usaha" required>
          </div>
        </div>
          <div class="form-group">
          <label for="sektor_usaha" class="col-sm-2 control-label">Lokasi Usaha</label>
          <div class="col-sm-10">
            <div id="map-canvas"></div>
            <input type="text" id="latitude" name="latitude">
             <input type="text" id="longitude" name="longitude">
          </div>
        </div>
         <div id="container-new-picture">
        <div class="form-group">
          <label for="file" class="col-sm-2 control-label">Gambar Usaha</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" id="file" name="gambar_usaha[]"  >
          </div>
        </div>
       

        </div>
         <div class="form-group">
          <label for="file" class="col-sm-2 control-label">Tambah Gambar</label>
          <div class="col-sm-10">
            <button type="button" class="btn btn-default" id="tambah_gambar">+</button>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Simpan Usaha</button>
          </div>
        </div>
      </form>
        </div>
      </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
   
   
   <script type="text/javascript">
    $(document).ready(function() {
      var max_fields      = 10; //maximum input boxes allowed
      var wrapper         = $("#container-new-picture"); //Fields wrapper
      var add_button      = $("#tambah_gambar"); //Add button ID
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append('  <div class="form-group">'
          +'<label for="file" class="col-sm-2 control-label">Gambar Usaha</label>'
          +'<div class="col-sm-10">'
            +'<input type="file" class="form-control" id="file" name="gambar_usaha[]"  > <a href="#" class="remove_field">Remove</a> '
          +'</div>'
        +'</div>');
          }
      });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent().parent().remove(); x--;
      });
      var map;
      var markers = [];
      function initialize() {
        var mapOptions = {
          zoom: 13,
          center: new google.maps.LatLng(-6.917464, 107.619123)
        };
        var myLatlng = new google.maps.LatLng(-6.917464,107.619123);
         $("#latitude").val(-6.917464);
          $("#longitude").val(107.619123);
        map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);

        addMarker(myLatlng);
        google.maps.event.addListener(map, 'click', function(event) {
           placeMarker(event.latLng);
        });
      }
      function addMarker(location){
        var marker = new google.maps.Marker({
          position: location,
          map: map,
          title: 'Hello World!'
        });
        markers.push(marker);
      }
      function setAllMap(map) {
        for (var i = 0; i < markers.length; i++) {
         markers[i].setMap(map);
        }
      }
      function clearMarkers() {
        setAllMap(null);
      }
      function placeMarker(location) {
          clearMarkers();
          markers = [];
          $("#latitude").val(location.A);
          $("#longitude").val(location.F);
          console.log(location.A,location.F);
          var marker = new google.maps.Marker({
              position: location, 
              map: map
          });
          markers.push(marker);
      }
 
      google.maps.event.addDomListener(window, 'load', initialize);

      $("#kecamatan").on("change",function(e){
        $("#id_kelurahan").empty();
          $.ajax({
            method: "POST",
            url: "get_kelurahan.php",
            data: { id_kecamatan:$(this).val()}
          })
          .done(function( msg ) {

            $("#id_kelurahan").append(msg);
          }); 
      });
       


  });
   </script>
  </body>
</html>
