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
                

                <h3 class="profile-username text-center">
                	<?php ?>
                </h3>

                <p></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Peso</b> <a class="float-right" id="acao"><?php echo '<p class="text-muted">'.$_SESSION["Ppeso"].' </p>'?></a>
                  </li>

                  <li class="list-group-item">
                    <b>Altura</b> <a class="float-right" id="acao"><?php echo '<p class="text-muted">'.$_SESSION["Paltura"].' </p>'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Idade</b> <a class="float-right"><?php echo '<p class="text-muted">'.$_SESSION["Pidade"].' </p>'?></a>
                  </li>
                  <li class="list-group-item">
                    <b style="font-size:80%">Data de Nascimento</b> <a class="float-right"><?php echo '<p class="text-muted">'.$_SESSION["PDN"].' </p>'?></a>
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

                	echo '<p class="text-muted">'.$_SESSION['Pnmr'].'</p>';

                ?>

                <strong>Location</strong>

                <?php 
                
                echo '<p class="text-muted">'.$_SESSION['Ploc'].' </p>'
                
                ?>
                <strong>Doctor</strong>
                <?php 
                
                echo '<p class="text-muted">';
                 if($_SESSION["Pmedico"]==-1){echo "Dont have 1";}else{echo $_SESSION["Pmedico"];}
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
                
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <div id="element"/>
                <script>
                    // initialize the Calendar component
                    var calendar = new ej.calendars.Calendar();
             
                    // Render the initialized button.
                    calendar.appendTo('#element')
                </script>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>

          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->