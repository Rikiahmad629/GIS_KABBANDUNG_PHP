<?php include("../config/session.php");
    include("../config/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard GIS </title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/bootstrap/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap.css">
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script type="text/javascript" language="javascript" src="../js/jquery-1.10.2.min.js"></script>
   <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="../js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#table-data-akun').dataTable({
          "iDisplayLength": 25
        });
      } );
    </script>
    <style>
    .form-horizontal .control-label{
/* text-align:right; */
text-align:left;
 
}
    </style>
  </head>