    <section class="content-header">
      <h1>
        <i class="fa fa-dashboard"></i>
        Dashboard 
        <small>Student Enrollment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?api=Home&page=Dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="index.php?api=Enrollment&page=Dashboard"> Student Enrollment</a></li>
        <li class="active"> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Student Added</p>
            </div>
            <div class="icon">
              <i class="ion ion-gradution-cap"></i>
            </div>
            <a href="index.php?api=Enrollment&page=StudentList" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <section class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-dashboard"></i>
              <h3 class="box-title">Dashboard Box</h3>
            </div>
            <div class="box-body">
              <?php
              for($i=0; $i<30; $i++){
                echo "<br>";
              }
              ?>
            </div>
            <div class="box-footer">
              
            </div>
          </div>
        </section>
        <!-- /.Main row -->
      </div>
      <!-- /.row (main row) -->

    </section>