<link rel="stylesheet" href="../../LIB/plugins/datatables/dataTables.bootstrap.css"> 
<!-- DataTables -->
<script src="../../LIB/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../LIB/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Datatable Info -->

    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>
        Student Assignments Marks List
        <small>Result Processor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?api=Home&page=Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="index.php?api=ResultProcessor&page=Dashboard">Result Processor</a></li>
        <li class="active">Assignment List</li>
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
              <i class="fa fa-edit"></i>
              <h3 class="box-title"> Student Assignments Marks List</h3>
            </div>
            <div class="box-body">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>Student Name</th>
                  <th>Class Roll</th>
                  <th>Grade Point</th>
                  <th>Grade</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  include '../../DAL/dbconnection.php';
                  include '../../BLL/functions/calculation.php';
                  
                  $ViewQeury = "SELECT * FROM `assignmentmarksinfo`;";
                  
                  $result = $connection->query($ViewQeury);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo "<tr>";
                        echo "<td>" . $row["studentname"] . "</td>";
                        echo "<td>" . $row["classroll"] . "</td>";
                        echo "<td>";
                        
                        . $row["subjectname"] . "</td>";
                        echo "<td>" . $row["totalmarks"] . "</td>";
                        echo "<td>" . $row["marksreceive"] . "</td>";
                        echo "<td>"; . gpa($row["totalmarks"], $row["marksreceive"]) . "</td>";
                          $grade = gpa($row["totalmarks"], $row["marksreceive"]);
                          
                     echo "</tr>";   
                    }
                    } else {
                      echo "<tr><td colspan=\"6\"><center>0 results</center></td></tr>";
                    }
              ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Student Name</th>
                  <th>Class Roll</th>
                  <th>Subject Name</th>
                  <th>Total Marks</th>
                  <th>Marks Archive</th>
                  <th>Grade</th>
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