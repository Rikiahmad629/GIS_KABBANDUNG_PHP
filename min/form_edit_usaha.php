 <?php include("../template/header_admin.php");?>

  <body>
 <style>
      #map-canvas {
     height: 400px;
      
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
            <h2>Form Edit Usaha</h2>
            <?php
                $query = "select  *,b.Nama as nama_kelurahan,a.id as id_usaha from daftar_usaha a 
                      join kelurahan b on(a.id_kelurahan = b.IDKelurahan) 
                      join kecamatan c on(b.IDKecamatan = c.IDKecamatan)  where a.id = '".$_GET['id']."'";
                $q = mysql_query($query) or die(mysql_error());
                $data = mysql_fetch_array($q);
                $nama_usaha = $data['nama_usaha'];
                 $id_usaha = $data['id'];
                $produk_utama = $data['produk_utama'];
                $telp = $data['telp'];
                $alamat = $data['alamat_lengkap'];
                $skala_usaha = $data['skala_usaha'];
                $longitude = $data['longitude'];
                $latitude = $data['latitude'];
                $id_kelurahan = $data['id_kelurahan'];
                $sektor_usaha = $data['sektor_usaha'];
                $id_kecamatan = $data['IDKecamatan'];
                $id_kelurahan = $data['id_kelurahan'];
                $nama_kelurahan = $data['nama_kelurahan'];
                $latitude = $data['latitude'];
                $id_pengusaha = $data['user_id'];
                $longitude = $data['longitude'];
                $id_usaha = $data['id_usaha'];
            ?>
        <form class="form-horizontal" method="POST" action="proses_edit_usaha.php"  enctype="multipart/form-data">
        <input type="hidden" name="id_usaha" value="<?php echo $id_usaha;?>">
        <div class="form-group">
          <label for="nama_usaha" class="col-sm-2 control-label">Nama Usaha</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha" value="<?php echo $data['nama_usaha'];?>" required>
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
              <option value="<?php echo $data['id'];?>" <?php if($data['id'] === $id_pengusaha) echo "selected";?>><?php echo $data['nama'];?></option>
              <?php }?>
            </select>
          </div>
        </div>
        <?php }?>
        <div class="form-group">
          <label for="produk_utama" class="col-sm-2 control-label">Produk Utama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="produk_utama" name="produk_utama" placeholder="Produk Utama" value="<?php echo $produk_utama;?>" required>
          </div>
        </div>
         <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Alamat Lengkap</label>
          <div class="col-sm-10">
           <textarea class="form-control" rows="3" id="alamat" name="alamat" required><?php echo $alamat;?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="telp" class="col-sm-2 control-label">Telp</label>
          <div class="col-sm-10">
          <input type="text"  id="telp" name="telp" value="<?php echo $telp;?>" required> 
          </div>
        </div>
         <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Kecamatan</label>
          <div class="col-sm-10">
            <select class="form-control" name="id_kecamatan" id="kecamatan">
              <?php $query = "select * from Kecamatan where IDKabupaten = 31896";
                $data_query = mysql_query($query);
                while($data = mysql_fetch_array($data_query)){
                  if($data['IDKecamatan'] === $id_kecamatan){
                  ?> 
                    <option value="<?php echo $data['IDKecamatan'];?>" selected><?php echo $data['Nama'];?></option>
                  <?php }else{ ?>
                     <option value="<?php echo $data['IDKecamatan'];?>"><?php echo $data['Nama'];?></option>
                 <?php }
                } ?>
            </select>
          </div>
        </div>
         <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Kelurahan/Desa</label>
          <div class="col-sm-10">
             <select class="form-control" name="id_kelurahan" id="id_kelurahan" required>
                  <option value="<?php echo $id_kelurahan;?>"><?php echo $nama_kelurahan;?></option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="tempat_lahir" class="col-sm-2 control-label">Skala Usaha</label>
          <div class="col-sm-4">
            <select class="form-control" name="skala_usaha">
              <option value="Kecil" <?php if($skala_usaha === "Kecil") { echo "selected";}?>>Kecil</option>
              <option value="Menengah" <?php if($skala_usaha === "Menengah") { echo "selected";}?>>Menengah</option>
              <option value="Besar" <?php if($skala_usaha === "Besar") { echo "selected";}?>>Besar</option>
            </select>
          </div>
        </div>
		
		<div class="form-group">
          <label for="sektor_usaha" class="col-sm-2 control-label">Sektor Usaha</label>
          <div class="col-sm-10">
            <select class="form-control" name="IDSektor" id="IDSektor">
              <?php $query = "select Nama from sektor";
                $data_query = mysql_query($query);
                while($data = mysql_fetch_array($data_query)){
              ?> 
              <option value="<?php echo $data['Nama'];?>"><?php echo $data['Nama'];?></option>
              <?php }?>
            </select>
          </div>
        </div>
		
          <div class="form-group">
          <label for="sektor_usaha" class="col-sm-2 control-label">Lokasi Usaha</label>
          <div class="col-sm-10">
            <div id="map-canvas"></div>
            <input type="text" id="latitude" name="latitude" value="<?php echo $latitude;?>">
             <input type="text" id="longitude" name="longitude" value="<?php echo $longitude;?>">
          </div>
        </div>
         <div id="container-new-picture">
        <div class="form-group">
          <label for="file" class="col-sm-2 control-label">Gambar Usaha</label>
          <div class="col-sm-10">
              <?php $query = "select * from gambar_usaha where id_usaha = '".$id_usaha."'";
                $data_query = mysql_query($query);
                while($data = mysql_fetch_array($data_query)){?>
             <div class="col-xs-6 col-md-3">
     
                   <a href="delete_gambar.php?id_usaha=<?php echo $id_usaha;?>&id=<?php echo $data['id'];?>" style="float:right;">Remove</a>
                  <img src="../images/<?php echo $data['gambar']?>" class="thumbnail" width="100%">
                </div>
                <?php }?>
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
            <button type="submit" class="btn btn-default">Update Usaha</button>
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
        var longitude = $("#longitude").val();
        var latitude = $("#latitude").val();
        var mapOptions = {
          zoom: 13,
          center: new google.maps.LatLng(latitude, longitude)
        };
        var myLatlng = new google.maps.LatLng(latitude,longitude);
         $("#latitude").val(latitude);
          $("#longitude").val(longitude);
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
