<!-- Datatable CSS -->
<link rel="stylesheet" href="../plugins/plugins/datatables/dataTables.bootstrap.css">
<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
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

    <section class="content-header">
      <h1>
        <i class="fa fa-pie-chart"></i> Results
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Results</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">All Assignments History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Course Title</th>
                  <th>Teacher</th>
                  <th>Submission Date</th>
                  <th>Grade</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php include 'assignment_process.php'; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Course Title</th>
                  <th>Teacher</th>
                  <th>Submission Date</th>
                  <th>Grade</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /. row-->
    </section>
    <!-- /.content -->