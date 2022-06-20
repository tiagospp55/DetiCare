<?php
  session_start();
  $_SESSION["last_page"] = "profile.php";
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
  $( "#target" ).click(function() {
  alert( "Handler for .click() called." );
});

</script>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                

                <h3 class="profile-username text-center"><?php echo $_SESSION["nome"]; ?></h3>

                <p></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Peso</b> <a class="float-right" id="acao"><?php echo '<p class="text-muted">'.$_SESSION["peso"].' </p>'?></a>
                  </li>

                  <li class="list-group-item">
                    <b>Altura</b> <a class="float-right" id="acao"><?php echo '<p class="text-muted">'.$_SESSION["altura"].' </p>'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Idade</b> <a class="float-right"><?php echo '<p class="text-muted">'.$_SESSION["idade"].' </p>'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Data de Nascimento</b> <a class="float-right"><?php echo '<p class="text-muted">'.$_SESSION["DN"].' </p>'?></a>
                  </li>
</ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong></i> Phone Number</strong>

                <?php 
                
                echo '<p class="text-muted">'.$_SESSION["nmr"].' </p>'
                
                ?>

                <strong>Location</strong>

                <?php 
                
                echo '<p class="text-muted">'.$_SESSION['loc'].' </p>'
                
                ?>
                <strong>Doctor</strong>
                <?php 
                
                echo '<p class="text-muted">';
                 if($_SESSION["medico"]==-1){echo "Dont have 1";}else{echo $_SESSION["medico"];}
                echo ' </p>';
                
                ?>
                

</hr>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
         
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
