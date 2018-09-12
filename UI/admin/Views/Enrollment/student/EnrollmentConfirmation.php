    <section class="content-header">
      <h1>
        <i class="fa fa-dashboard"></i>
        Dashboard 
        <small>Student Enrollment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?api=Home&page=Dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="index.php?api=Enrollment&page=Dashboard"> Student Enrollment</a></li>
        <li class="active"> Confirmation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <section class="col-lg-offset-4 col-lg-4">
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-dashboard"></i>
              <h3 class="box-title">Enrolled Student Login Information</h3>
            </div>
            <div class="box-body">
              <center><h1>Congratulation!</h1></center>
              <table class="table table-striped">
                <tr>
                  <td colspan="2"><center><h4>User Login Information</h4></td>
                </tr>
                <tr>
                  <td>User Email Address: </td>
                  <td><?php echo $_GET["email"]; ?></td>
                </tr>
                <tr>
                  <td>User Category: </td>
                  <td><?php echo $_GET["category"]; ?></td>
                </tr>
                <tr>
                  <td>User Password: </td>
                  <td><?php echo $_GET["password"]; ?></td>
                </tr>
                
              </table>
            </div>
            <div class="box-footer">
              <center>
                <a href="index.php?api=Enrollment&page=AddNewStudent"><button class="btn btn-info">Add Another Student</button></a>
              </center>
            </div>
          </div>
        </section>
        <!-- /.Main row -->
      </div>
      <!-- /.row (main row) -->

    </section>