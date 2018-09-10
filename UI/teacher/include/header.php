<nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php?page=dashboard" class="navbar-brand"><b>Result </b>Maker</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?page=dashboard">Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Results <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="index.php?page=assignments">Assignments</a></li>
                <li><a href="index.php?page=class_test">Class Test</a></li>
                <li><a href="index.php?page=mid_terms">Mid-Terms Exam</a></li>
                <li class="divider"></li>
                <li><a href="index.php?page=final_terms">Final Term Exam</a></li>
                <li class="divider"></li>
                <li><a href="index.php?page=report_marks">Report Card</a></li>
              </ul>
            </li>
            <li><a href="index.php?page=profile">Profile</a></li>
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
                <img src="../../assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Hafijul Islam</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Hafijul Islam - Student
                    <small>Computer Science and Engineering</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="index.php?page=setting" class="btn btn-info btn-flat">Settings</a>
                  </div>
                  <div class="pull-right">
                    <a href="../../login.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-flViewsd -->
    </nav>