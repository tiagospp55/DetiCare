<?php
session_start();
$_SESSION["last_page"] = "graph.php";

include("../functions.php");
?>


<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../AdminLTE/plugins/fontawesome-free-6.1.1-web/css/all.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="../AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="../AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<!-- BS Stepper -->
<link rel="stylesheet" href="../AdminLTE/plugins/bs-stepper/css/bs-stepper.min.css">
<!-- dropzonejs -->
<link rel="stylesheet" href="../AdminLTE/plugins/dropzone/min/dropzone.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="../AdminLTE/plugins/daterangepicker/daterangepicker.css">


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Heart Beat</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body pb-0">
      <canvas id="line-chart" width="800" height="300"></canvas>
    </div>
  </div>
</section>



<script type="module" src="graph.js"></script>
<!-- Radio Buttons -->


<section class="content">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col col-lg-2">
        <div class="form-group">
          <label>Begin:</label>
          <div class="input-group mb-3">
            <input type="date" id="dn" name="dn" class="form-control" value="">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-calendar"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <div class="col-md-auto">
      <div class="form-group">
        <label>End:</label>
        <div class="input-group mb-3">
          <input type="date" id="dn" name="dn" class="form-control" value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-lg-2">
      <div class="form-group">
        <label>Date range button:</label>
        <i class="far fa-calendar-alt"></i>
        <select class="form-control select2" style="width: 100%;">

          <option selected="selected">Custom range</option>
          <option>Last Day</option>
          <option>Last Week</option>
          <option>Last Month</option>
          <option>Last Year</option>

        </select>


      </div>
    </div>





  </div>
  </div>

  <!-- /.card-body -->
  </div>
</section>

<!-- /.card-body -->



<!--
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Untitled</title>
      <meta name="description" content="This is an example of a meta description.">
    </head>
    <body>
      <canvas id="line-chart" width="800" height="450"></canvas>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
      <script type="module" src="graph.js"></script>
      <script type="module" src="../graph.js"></script>

</body>
</html> -->

<!-- jQuery -->
<script src="../AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE/dist/js/adminlte.min.js"></script>