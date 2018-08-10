<?php
 /*   //retrive profile info
    $sql = "SELECT `types`, `fullnames`, `departments`, `profile_pic`"
         . "FROM `users`, `profile`"
         . "WHERE `profile`.`serial_id` = `users`.`serial_id`"
         . "AND `profile`.`serial_id` = '$serial_id';";
    
        $feedback = $conn->query($sql);	
        
if ($feedback->num_rows > 0) {
    
    $_SESSION = $feedback->fetch_assoc();
    */
    $_SESSION["serial_id"] = "456";


?>
<nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo"index.php?page=dashboard;" ?>" class="navbar-brand"><?php echo $programTitle; ?></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo "index.php?page=dashboard&id=" . $SESSION["serial_id"]; ?>">Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Results <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo "index.php?page=assignments&id=" . $SESSION["serial_id"]; ?>">Assignments</a></li>
                <li><a href="<?php echo "index.php?page=class_test&id=" . $SESSION["serial_id"]; ?>">Class Test</a></li>
                <li><a href="<?php echo "index.php?page=mid_terms&id=" . $SESSION["serial_id"]; ?>">Mid-Terms Exam</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo "index.php?page=final_terms&id=" . $SESSION["serial_id"]; ?>">Final Term Exam</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo "index.php?page=report_marks&id=" . $SESSION["serial_id"]; ?>">Report Card</a></li>
              </ul>
            </li>
            <li><a href="<?php echo "index.php?page=profile&id=" . $SESSION["serial_id"]; ?>">Profile</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php if($_SESSION["profile_pic"] == null) echo "files/profile_pic/default.png";
                            else echo "files/profile_pic/"; ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo "hafiz" ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php if($_SESSION["profile_pic"] == null) echo "files/profile_pic/default.png";
                            else echo "files/profile_pic"; ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_SESSION["fullnames"] . " - " . strtoupper($_SESSION["types"]); ?>
                    <small><?php
                         switch ($_SESSION["departments"]){
                             case 'CSE':
                                 echo "Computer Science and Engineering";
                                 break;
                             case 'ECE':
                                 echo "Electronics and Communication Engineering";
                                 break;
                             case 'BBA':
                                 echo "Bachelor of Business Administration";
                                 break;
                             default:
                                 echo "chini na";
                         }
                    ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="index.php?page=setting" class="btn btn-info btn-flat">Settings</a>
                  </div>
                  <div class="pull-right">
                    <a href="../../index.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>