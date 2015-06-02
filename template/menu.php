<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">GIS Usaha Bandung Barat</a>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li  ><a href="index.php">Home</a></li>
      <li  ><a href="about.php">About</a></li>
      <li  ><a href="contact.php">Contact</a></li>
    </ul>
   
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
        <div class="dropdown-menu" style="padding:17px;width:400px;">
        <form class="form" id="formLogin" action="proses_login.php" method="post"> 
          <div id="message"></div>
          <div class="form-group">
            <label for="no_ktp">No Ktp</label>
            <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No Ktp" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
          <button type="submit" id="btnLogin" class="btn">Login</button>
          <a href="daftar.php">Daftar</a> | <a href="">Forgot Password</a>
        </form>
      </div>
      </li>
      
    </ul>
    
  </div> 
</div>