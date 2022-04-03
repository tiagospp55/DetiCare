
<?php
  session_start();
  $_SESSION["last_page"] = "graph.php";

  include("../functions.php");
?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Heart Beat</h1>
      </div>        
    </div>
  </div><!-- /.container-fluid -->
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<!-- Main content -->
<section class="content" >

  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body pb-0">
        <canvas id="line-chart" width="800" height="300"></canvas>
    </div>
  </div>
</section>



<script type="module" src="graph.js"></script>
<!-- Radio Buttons -->

              <div class="card-body table-responsive pad" style="position: absolute;left: 50%;">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option_1" autocomplete="off" checked> 1h
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option_2" autocomplete="off"> 1 dia
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option_3" autocomplete="off"> 1 semana
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option_4" autocomplete="off"> 1 mês
                  </label>
                  
                </div>
              </div>
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