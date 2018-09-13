    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>
        Incourse Marks Entry Form 
        <small>Result Processor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?api=Home&page=Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?api=ResultProcessor&page=Dashboard">Result Processor</a></li>
        <li class="active">Incourse Entry</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
        <!-- Registration box -->
          <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-edit"></i>
              <h3 class="box-title"> Student Incourse Marks Entry Form</h3>
            </div>
                  <div class="box-body">
                    <?php
                    if(isset($_GET["done"])){
                      if($_GET["done"] == 1){
                      echo "<div class=\"alert alert-success\"><center><b>Result Recorded</b></center></div>";
                      }
                      else{
                        $_GET["done"] = NULL;
                      }
                    }
                    ?>
                    <form action="../../BLL/resultProcessor/incourseProcess.php" method="post">
                    <div class="col-lg-12">
                      <table class="table table-striped">
                        <tr>
                          <td colspan="2"><center>Entry Incourse Marks</center></td>
                      </tr>
                      <tr>
                        <td>
                          <label>Student Name: </label>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="studentName" required >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Student Roll: </label>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="classRoll" required >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Subject Name: </label>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="subjectName" required >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Total Marks: </label>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="totalMarks" required >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Marks Received: </label>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="marksGot" required >
                        </td>
                      </tr>
                      </table>
                    </div>
                      <center><button type="submit" class="btn btn-info">Submit</button></center>
                    </form>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
            </div>
          <!-- /.box (View Student box) -->
        </section>
        <!-- /.Main Section col -->
      </div>
      <!-- /.row (main row) -->
    </section>