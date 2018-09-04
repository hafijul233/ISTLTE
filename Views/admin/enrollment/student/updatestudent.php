    <section class="content-header">
      <h1>
        <i class="fa fa-edit"></i>
        Update Student Information 
        <small>Student Enrollment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?api=Home&page=Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?api=Enrollment&page=Dashboard">Student Enrollment</a></li>
        <li class="active">Update</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <!-- Registration box -->
          <div class="box box-success">
            <form action="" method="post" multiple>
              <div class="box-header">
                <i class="fa fa-user-plus"></i>
                <h3 class="box-title">New Student Registration Form</h3>
              </div>
              <div class="box-body">
                <div class="col-lg-12">
                  <fieldset>
                    <legend><i class="fa fa-user"></i> Student Personal Information</legend>
                    <div class="row">
                      <div class="col-lg-9">
                        <div class="form-group">
                          <label for="First Name">First Name</label>
                          <input type="text" class="form-control" name="firstName" placeholder="Ex: Hafijul" reqViewsred>
                        </div>
                        <div class="form-group">
                          <label for="First Name">Middle Name</label>
                          <input type="text" class="form-control" name="firstName" placeholder="Ex: Hafijul" reqViewsred>
                        </div>
                        <div class="form-group">
                          <label for="First Name">Last Name</label>
                          <input type="text" class="form-control" name="firstName" placeholder="Ex: Hafijul" reqViewsred>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="box box-profile">
                          <div class="form-group">
                            <input type="file" class="form-control-static" name="profilePic" accept="image/gif, image/jpeg, image/png" onchange="loadFile(event)" reqViewsred />
                          </div>
                            <img class="img-responsive" id="output"/>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- /.Registration Form -->
              </div>
              <!-- /.body -->
              <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-left"><h5>Register</h5></button>
                  <button type="reset" class="btn btn-danger pull-right"><h5>Cancel</h5></button>
              </div>
            </form>
          </div>
          <!-- /.box (Registration box) -->
        </section>
        <!-- /.Main Section col -->
      </div>
      <!-- /.row (main row) -->
    </section>