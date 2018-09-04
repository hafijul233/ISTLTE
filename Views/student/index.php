<?php 
include '../../SETUP/configuration.php';
include '../../Controllers/functions/session.php';
include '../../Database/dbconnection.php';
//set serial id positon
/*if(isset($_GET["id"]))
    $serial_id = $_GET["id"];
else
    $serial_id = $_SESSION["serial_id"];

// Check the Page to Display
  if(isset($_GET["page"])){
    $page = $_GET["page"];
  }
  
  else {
    $page = null; 
  }*/
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-eqViewsv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../Libraries/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../LIB/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../Libraries/dist/css/skins/_all-skins.min.css">
  <script src="../../Libraries/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="../../Libraries/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../Libraries/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="../../Libraries/plugins/fastclick/fastclick.js"></script>
  <script src="../../Libraries/dist/js/app.min.js"></script>
  <script src="../../Libraries/dist/js/demo.js"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">

    <?php reqViewsre_once 'include/header.php'; ?>
  
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->      
      <?php reqViewsre 'controller.php'; ?>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'include/footer.php'; ?>
</div>
<!-- ./wrapper -->

</body>
</html>
