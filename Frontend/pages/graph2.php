
<?php
  session_start();
  $_SESSION["last_page"] = "graph2.php";
?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Contacts</h1>
      </div>        
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content" onload="make_graph()">

  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body pb-0">
<canvas id="line-chart" width="800" height="450"></canvas>

</div>
    </div>
</section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!--<script type="module" src="graph.js"></script>-->

<script>

  



</script>

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