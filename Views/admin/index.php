<?php

    include '../../SETUP/configuration.php';
    include '../../Controllers/functions/session.php';
    include '../../Controllers/functions/helper.php';
   
  // Check the Page to Display
  if(isset($_GET["page"])){
    $page = $_GET["page"];
  }
  else {
    $page = null; 
  }
  //Check Which Api Too Lunch
  if(isset($_GET["api"])){
    $apiName = $_GET["api"];
  }
  else {
    $apiName = null; 
  }
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-eqViewsv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="../../Resources/img/logo/istbd.png" >
  <title> <?php echo $developerName; ?> | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../Libraries/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../Libraries/dist/css/ISTLTE.css">
  <link rel="stylesheet" href="../../Libraries/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../Libraries/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../../Libraries/plugins/morris/morris.css">
  <link rel="stylesheet" href="../../Libraries/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../../Libraries/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../../Libraries/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../Libraries/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script src="../../Libraries/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="https://code.jquery.com/Views/1.11.4/jquery-Views.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php
  include 'include/header.php';
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php 
  include 'include/leftslidebar.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
      reqViewsre 'controller.php';
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  include '../include/footer.php';
  ?>
  <!-- Control Sidebar -->
  <?php
  include 'include/rightslidebar.php';
  ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
  $.widget.bridge('Viewsbutton', $.Views.button);
</script>
<script src="../../Libraries/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../Libraries/plugins/morris/morris.min.js"></script>
<script src="../../Libraries/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="../../Libraries/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../Libraries/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../../Libraries/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../Libraries/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../Libraries/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../../Libraries/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../../Libraries/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../Libraries/plugins/fastclick/fastclick.js"></script>
<script src="../../Libraries/dist/js/app.min.js"></script>
<script src="../../Libraries/dist/js/pages/dashboard.js"></script>
<script src="../../Libraries/dist/js/demo.js"></script>
</body>
</html>
