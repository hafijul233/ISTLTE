<?php

    include '../../SETUP/configuration.php';
    include '../../BLL/functions/session.php';
   
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?php echo $developerName; ?> | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../LIB/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../LIB/dist/css/ISTLTE.css">
  <link rel="stylesheet" href="../../LIB/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../LIB/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../../LIB/plugins/morris/morris.css">
  <link rel="stylesheet" href="../../LIB/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../../LIB/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../../LIB/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../LIB/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script src="../../LIB/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
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
      require 'controller.php';
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
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="../../LIB/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../LIB/plugins/morris/morris.min.js"></script>
<script src="../../LIB/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="../../LIB/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../LIB/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../../LIB/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../LIB/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../LIB/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../../LIB/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../../LIB/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../LIB/plugins/fastclick/fastclick.js"></script>
<script src="../../LIB/dist/js/app.min.js"></script>
<script src="../../LIB/dist/js/pages/dashboard.js"></script>
<script src="../../LIB/dist/js/demo.js"></script>
</body>
</html>
