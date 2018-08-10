<!-- Profile update Css -->
 <link rel="stylesheet" href="../../assets/plugins/iCheck/all.css">
<link rel="stylesheet" href="../../assets/plugins/select2/select2.min.css">
<!--  /. Profile Update Css -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Profile Update
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile Update</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-primary color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-user"></i> User's Profile Information</h3>
        </div>
          <div class="box-body">
            <div class="col-xs-12">
              <!-- form start -->
              <form role="form">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Hafijul Islam" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="Department">Department</label>
                    <select class="form-control" value="CSE" required>
                      <option value="CSE">Computer Science &amp; Engineering</option>
                      <option value="ECE">Electronics &amp; Communication Engineering</option>
                      <option value="BBA">Bachelor of Business Administration</option>
                      <option value="DIP">Diploma Engineering</option>
                    </select>
                  </div>
                </div> 
                 <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Session</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="204 - 2015" required />
                  </div>
                </div>                
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Department">Choose Semester</label>
                      <select class="form-control">
                        <option value="first">1st</option>
                        <option value="second">2nd</option>
                        <option value="third">3rd</option>
                        <option value="fourth">4th</option>
                        <option value="fifth">5th</option>
                        <option value="sixth">6th</option>
                        <option value="seventh">7th</option>
                        <option value="eighth">8th</option>
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Class Roll</label>
                    <input type="text" class="form-control" name="classroll" value="1576" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Gender</label>
                      <div class="form-group">
                      <label>
                        <input type="radio" name="gender" class="flat-red" value="male" checked>
                        Male   
                      </label>
                      <label>
                        <input type="radio" name="gender" class="flat-blue" value="female">
                        Female   
                      </label>
                      <label>
                        <input type="radio" name="gender" class="flat-blue" value="other">
                        Other  
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputFile">Profile Picture</label>
                    <input type="file" id="exampleInputFile" name="profile_pic" accept=".jpg, .png, .gif" required>
                    <p class="help-block">Max Resolution (300px x 300px)</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
        <!-- /. box-footer--> 
        </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

<script src="../../assets/plugins/iCheck/icheck.min.js"></script>
<script src="../../assets/plugins/select2/select2.full.min.js"></script>
