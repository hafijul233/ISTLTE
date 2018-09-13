<link rel="stylesheet" href="../../LIB/plugins/datatables/dataTables.bootstrap.css"> 
<!-- DataTables -->
<script src="../../LIB/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../LIB/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Datatable Info -->

    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>
        Enrolled Student List 
        <small>Student Enrollment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?api=Home&page=Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?api=Enrollment&page=Dashboard">Student Enrollment</a></li>
        <li class="active">Student List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-xs-12">
          <!-- Registration box -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-users"></i>
              <h3 class="box-title"> Enrolled Student List</h3>
            </div>
            <div class="box-body">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Course Enrolled</th>
                  <th>Registration No</th>
                  <th>Class Roll</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  include '../../DAL/dbconnection.php';
                  
                  $ViewQeury = "SELECT `studentprofileinfo`.`id`,`firstname`, `middlename`, `lastname`,"
                             . "`department`, `course`, `registrationno`,`classroll` FROM `studentprofileinfo`,`studenteducationinfo`"
                             . "WHERE `studentprofileinfo`.`id` = `studenteducationinfo`.`studentid` AND `studentprofileinfo`.`status` = `studenteducationinfo`. `status`"
                             . "AND `studentprofileinfo`.`status` = 1;";
                  
                  $result = $connection->query($ViewQeury);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo "<tr>";
                        echo "<td>" . $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"] . "</td>";
                        echo "<td>" . $row["department"] . "</td>";
                        echo "<td>" . $row["course"] . "</td>";
                        echo "<td>" . $row["registrationno"] . "</td>";
                        echo "<td>" . $row["classroll"] . "</td>";
                        echo "<td>"; ?>
                <a href="index.php?api=Enrollment&page=UserProfile&profileid=<?php echo $row["id"]; ?>">
                  <button class="btn btn-warning">Detail</button>
                </a>
                <?php        
                     echo "</td></tr>";   
                    }
                    } else {
                      echo "<tr><td colspan=\"6\"><center>0 results</center></td></tr>";
                    }
              ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Course Enrolled</th>
                  <th>Registration No</th>
                  <th>Class Roll</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box (View Student box) -->
        </section>
        <!-- /.Main Section col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>