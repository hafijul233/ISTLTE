<!-- bootstrap datepicker -->
<link rel="stylesheet" href="../../LIB/plugins/datepicker/datepicker3.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../../LIB/plugins/iCheck/all.css">
<!-- bootstrap datepicker -->
<script src="../../LIB/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../LIB/plugins/iCheck/icheck.min.js"></script>

    <section class="content-header">
      <h1>
        New Student Registration 
        <small>Student Enrollment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?api=Home&page=Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?api=Enrollment&page=Dashboard">Student Enrollment</a></li>
        <li class="active">Registration</li>
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
            <form action="../../BLL/studentEnrollment/studentenrollprocess.php" method="get" id="demoForm" multiple>
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
                          <input type="text" class="form-control" name="firstName" placeholder="Ex: Mohammad">
                        </div>
                        <div class="form-group">
                          <label for="First Name">Middle Name <font color="red">*</font></label>
                          <input type="text" class="form-control" name="middleName" placeholder="Ex: Hafijul" required>
                        </div>
                        <div class="form-group">
                          <label for="First Name">Last Name  <font color="red">*</font></label>
                          <input type="text" class="form-control" name="lastName" placeholder="Ex: Islam" required>
                        </div>
                      </div>
                      <div class="col-lg-3">
                          <div class="form-group">
                            <label for="Profile Picture">Picture  <font color="red">*</font></label>
                            <input type="file" class="form-control-static" name="profilePic" accept="image/gif, image/jpeg, image/png" onchange="loadFile(event)" required />
                          </div>
                          <center>
                            <img class="img-bordered img-responsive"  style="height:156px; width: auto;" id="output"/>
                          </center>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="form-group">
                          <label for="Email Address">Email Address <font color="red">*</font></label>
                          <input type="email" class="form-control" name="emailAddress" placeholder="Ex: example@example.com" required />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="Contact Number">Contact No. <font color="red">*</font></label>
                          <input type="tel" class="form-control" name="contactNo" placeholder="Ex: +880123456789" required />
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="Blood Group">Blood Group <font color="red">*</font></label>
                          <select class="form-control" name="bloodGroup" required>
                            <option value="A+">A +ve</option>
                            <option value="A-">A -ve</option>
                            <option value="B+">B +ve</option>
                            <option value="B-">B -ve</option>
                            <option value="AB+">AB +ve</option>
                            <option value="AB-">AB -ve</option>
                            <option value="O+">O +ve</option>
                            <option value="O-">O -ve</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="Birth date">Date of Birth <font color="red">*</font></label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker"name="birthDate">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-5">
                        <div class="form-group">
                          <label for="gender">Gender</label>
                          <div class="form-group">
                            <label>
                              <input type="radio" class="flat-red" name="gender" value="male" checked>
                              Male    
                            </label>
                            <label>
                              <input type="radio" class="flat-red" name="gender" value="female">
                              Female    
                            </label>
                            <label>
                              <input type="radio" class="flat-red" name="gender" value="other">
                                Others
                            </label>
                          </div>
                        </div>
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-lg-9">
                        <div class="form-group">
                          <label for="persent address">Present Address <font color="red">*</font></label>
                          <textarea type="text" class="form-control" rows="3" name="presentAddress" placeholder="Wite Present Resident Address" required></textarea>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="persent contact">Phone Number </label>
                          <input type="text" class="form-control" name="presentPhoneNo" required/>
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div class="form-group">
                          <label for="permanent address">Permanent Address <font color="red">*</font></label>
                          <textarea type="text" class="form-control" rows="3" name="permanentAddress" placeholder="Wite Permanent Resident Address" required></textarea>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="persent contact">Phone Number: <font color="red">*</font></label>
                          <input type="text" class="form-control" name="permanentPhoneNo" />
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <br>
                  <fieldset>
                    <legend><i class="fa fa-users"></i> Parents and Guardian Information</legend>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="form-group">
                          <label for="father Name">Father's Name</label>
                          <input type="text" class="form-control" name="fatherName" placeholder="Ex: Father fullName" />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="father pro">Father's Profession</label>
                          <input type="text" class="form-control" name="fatherProfession" placeholder="Ex: Businessman" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="form-group">
                          <label for="mother Name">Mother's Name</label>
                          <input type="text" class="form-control" name="motherName" placeholder="Ex: Mother fullName" />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="mother pro">Mother's Profession</label>
                          <input type="text" class="form-control" name="motherProfession" placeholder="Ex: Teacher" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-9">
                        <div class="form-group">
                          <label for="permanent address">Post Address <font color="red">*</font></label>
                          <textarea type="text" class="form-control" rows="3" name="postAddress" placeholder="Wite Permanent Resident Address" required></textarea>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="persent contact">Phone Number: <font color="red">*</font></label>
                          <input type="text" class="form-control" name="phoneNo" required/>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <br>
                  <fieldset>
                    <legend><i class="fa fa-graduation-cap"></i> Education Information</legend>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="department">Department  <font color="red">*</font></label>
                          <select class="form-control" id="department" name="department" required>
                            <option value="CS">Computer Science</option>
                            <option value="EC">Electronics and Communication</option>
                            <option value="BA">Business Administration</option>
                            <option value="DE">Diploma Engineering</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="course">Course Name <font color="red">*</font></label>
                          <select class="form-control" id="course" name="course" required>
                            <!-- All Opptions are in JS function below -->
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="session">Session <font color="red">*</font></label>
                            <input type="text" class="form-control" name="session" placeholder="Ex: 2014 - 2015" required />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="Semester">Semester <font color="red">*</font></label>
                          <select class="form-control" name="semester" required >
                            <option value="1">First</option>
                            <option value="2">Second</option>
                            <option value="3">Third</option>
                            <option value="4">Fourth</option>
                            <option value="5">Fifth</option>
                            <option value="6">Sixth</option>
                            <option value="7">Seventh</option>
                            <option value="8">Eighth</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="session">Class Roll <font color="red">*</font></label>
                            <input type="text" class="form-control" name="classRoll" placeholder="Ex: 1576" required />
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="session">Registration No. <font color="red">*</font></label>
                            <input type="text" class="form-control" name="registrationNo" placeholder="Ex: 14502000922" required />
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
                <!-- /.Registration Form -->
              </div>
              <!-- /.body -->
              <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-left"><h5>Submit</h5></button>
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
    
<script>
  
  //Image Dispage script
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script type="text/javascript">
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

// anonymous function assigned to onchange event of controlling select list
document.forms['demoForm'].elements['department'].onchange = function(e) {
    // name of associated select list
    var relName = 'course';
    
    // reference to associated select list 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select list (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select list and data for new options
    appendDataToSelect(relList, obj);
};

// object literal holds data for optgroup/option elements
var Select_List_Data = {
    
    // name of associated select list
    'course': {
        
        // names match option values in controlling select list
        CS: {
            // optgroup label
            'Undergraduate Courses': {
                text: ['B.Sc (Hons.) in Computer Science and Engineering'],
                value: ['CSE']
            },
            'Graduate Courses': {
                text: ['M.Sc in Computer Science'],
                value: ['MSC']
            }
        },
        EC: {
            // optgroup label
            'Undergraduate Courses': {
                text: ['B.Sc (Hons.) in Electronics and Communication Engineering'],
                value: ['ECE']
            }
        },
        BA: {
            // optgroup label
            'Undergraduate Courses': {
                text: ['Bachelor of Business Administration'],
                value: ['BBA']
            },
            'Graduate Courses': {
                text: ['Masters of Business Administration'],
                value: ['MBA']
            }
        },
        DE: {
            // optgroup label
            'Diploma Courses': {
                text: ['Diploma in Computer Engineering', 'Diploma in Electrical Engineering',
                       'Diploma in Civil Engineering', 'Diploma in Telecommunication Engineering'],
                value: ['DCOE', 'DELE', 'DCIE', 'DTEE']
            }
        }
    } 
};

// populate associated select list when page loads
window.onload = function() {
    var form = document.forms['demoForm'];
    
    // reference to controlling select list
    var sel = form.elements['department'];
    sel.selectedIndex = 0;
    
    // name of associated select list
    var relName = 'course';
    // reference to associated select list
    var rel = form.elements[ relName ];
    
    // get data for associated select list passing its name
    // and value of selected in controlling select list
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select list
    appendDataToSelect(rel, data);
};

</script>

<script type="text/javascript">
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
  //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  });
</script>