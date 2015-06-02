
 <ul class="nav nav-sidebar">
 	<?php if($_SESSION['level'] === "DINAS"){ ?>
     <li <?php if($data_menu ==="overview") echo "class='active'";?> ><a href="overview.php">Overview</a></li>
    <li <?php if($data_menu ==="akun") echo "class='active'";?> ><a href="data_akun.php">Data Akun</a></li>
    <li  <?php if($data_menu ==="kecamatan") echo "class='active'";?>><a href="data_kecamatan.php">Data Kecamatan</a></li>
    <li  <?php if($data_menu ==="kelurahan") echo "class='active'";?>><a href="data_kelurahan.php">Data Kelurahan</a></li>
    <li <?php if($data_menu ==="sektor") echo "class='active'";?> ><a href="data_sektor.php">Data Sektor</a></li>
    <?php }?>
    <li  <?php if($data_menu ==="usaha") echo "class='active'";?>><a href="data_usaha.php">Data Usaha</a></li>
   
  </ul>
  