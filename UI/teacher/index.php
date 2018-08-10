<?php 
// Check the Page to Display
  if(isset($_GET["page"])){
    $page = $_GET["page"];
  }
  
  else {
    $page = null; 
  }
// Check the Action Needed
  if(isset($_GET["action"])){
    $action = $_GET["action"];
  }
  else {
    $action = null;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../assets/dist/css/skins/_all-skins.min.css">
  <script src="../../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="../../assets/plugins/fastclick/fastclick.js"></script>
  <script src="../../assets/dist/js/app.min.js"></script>
  <script src="../../assets/dist/js/demo.js"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">

    <?php require_once 'include/header.php'; ?>
  
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->      
      <?php require 'controller.php'; ?>
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
