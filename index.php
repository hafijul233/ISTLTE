<?php
    
    include 'Setup/configuration.php';
    include 'Controllers/functions/session.php';
    include 'Controllers/functions/message.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="Resources/img/logo/istbd.png" >
  <title><?php echo $programName; ?> | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="Libraries/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="Libraries/dist/css/ISTLTE.css">
  <link rel="stylesheet" href="Libraries/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <a href="index.php"><?php echo $programTitle; ?></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Log in to start your session</p>
    <form action="Controllers/login-module/loginprocess.php" method="post">
      <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="emailaddress" required >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                <input type="checkbox" name="cache" value="active" checked> Remember Me
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
      </div>
    </form>
    <hr>
    <div class="social-auth-links text-center">
      <?php
        echo ErrorMessage();
        echo SuccessMessage();
        echo WarnMessage();
      ?>
    </div>
    
    <div class="text-center" >
        <a href="#">Forgot Password</a>
        <!--<a href="#" class="text-center">Register a Account</a>-->
    </div>
  </div>
  </div>
  <?php
    include_once 'include/publicfooter.php';
  ?>
    
<script src="Libraries/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="Libraries/bootstrap/js/bootstrap.min.js"></script>
<script src="Libraries/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
