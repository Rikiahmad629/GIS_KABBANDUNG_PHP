  <?php include("../template/header_admin.php");?>

  <body>
 	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include("../template/menu_atas_admin.php");?>
    </div>
 	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <?php $data_menu = "overview";?>
            <?php include("../template/menu_samping_admin.php");?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	 <h2>Dashboard</h2>
			            <div class="row">
           <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                  <div class="inner">
                      <h3>
                          123
                      </h3>
                      <p>
                          Jumlah Usaha 
                      </p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-arrow-graph-up-right"></i>
                  </div>
              </div>
              </div><!-- ./col -->
          </div>
        </div>
      </div>
    </div>

   
   
  </body>
</html>
