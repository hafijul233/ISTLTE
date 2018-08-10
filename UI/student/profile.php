    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Profile
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-primary color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-user"></i> User's Profile Information</h3>
        </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <table class="table table-striped">
                  <tr>
                    <td>Full Name</td>
                    <td>Mohammad Hafijul Islam</td>
                  </tr>
                  <tr>
                    <td>Department</td>
                    <td>CSE</td>
                  <tr>
                    <td>Session</td>
                    <td>2014 - 2015</td>
                  </tr>
                  <tr>
                    <td>Class Roll</td>
                    <td>CSE - 1576</td>
                  </tr>
                </table>
              </div>
              <div class="col-md-4">
                <img class="profile-user-img img-responsive" src="files/img/user4-128x128.jpg" alt="User profile picture">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <table class="table table-striped">
                  <tr>
                    <td>Gender</td>
                    <td>male</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>hafijul233@gmail.com</td>
                  </tr>
                </table> 
              </div>
            </div> 
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php?page=profile_update& serial_id=<?php echo $row["serial_id"]; ?>"><button class="btn btn-info">Update Profile Info</button></a>
          </div>
        <!-- /. box-footer--> 
        </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->