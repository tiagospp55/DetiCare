<!DOCTYPE html>
<?php
  session_start();
  $_SESSION["last_page"] = "upload.php";
  include "../BD.php";
?>



<?php
//CONA
//<<<<<<< HEAD:Frontend/pages/upload.php
	//$conn=new mysqli('localhost','root','','peebd');
  //$conn=new mysqli('mysql-hosting.ua.pt','deti-care-dbo','RWwOukG293Zv1Kiz','deti-care');
//=======
	//$conn=new mysqli('deticare.ddns.net','root','','peebd');

//>>>>>>> 74c94ac7c7ef7b5bd876fc68cd7e5b7f4447d77a:Nova pasta (2)/Frontend/pages/upload.php
	//if($conn->connect_error){
    //echo "<script>console.log('".$conn->error."');</script>";
		//echo "ERROR: (".$conn->errno.")->".$conn->error;
	//}else{
		//echo "<script>console.log('Connected');</script>";
	//}

?>
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Uploads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            

            
            <!-- /.card -->
         
            <!-- general form elements -->
           
            <!-- /.card -->
            
            <!-- Input addon -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Personal Data</h3>
                </div>
                <div class="card-body">
                  <form method="post" action="#" id="regista1">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Birthday</span>
                     </div>
                  
                    <input type="date" name="dn" value="<?php echo $_SESSION['DN'] ?>" class="form-control" placeholder="dd/mm/yyyy">
                    <span class="input-group-append">
                    </span>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Phone Number</span>
                     </div>
                  
                    <input type="text" name="nmr" class="form-control" value="<?php echo $_SESSION['nmr'] ?>" placeholder="xxx xxx xxx">
                    <span class="input-group-append">
                    </span>
                  </div> 

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Address</span>
                     </div>
                  
                    <input type="text" name="lc" class="form-control" value="<?php echo $_SESSION['loc']?>" placeholder="Street, Number, Postal Code">
                    <span class="input-group-append">
                    </span>
                  </div> 

                  <div class="form-group">
                    <label>Doctor</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                      <option value="<?php echo $_SESSION["medico"]?>">Your Medic</option>
                      <?php include '../RegMedicos.php';?>
                    </select>
                  </div>


           
                  <!-- /input-group -->
                </div>
              </form>
                <div class="card-footer">
                  <button onclick="verify1()" class="btn btn-primary" name="alt" value="1" style="background-color:#17a2b8;" name="uploadPD">Submit</button>
                </div>
                <!-- /.card-body -->
              </div>


            
            <!-- /.card -->
            <!-- Horizontal Form -->
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->

          <div class="col-md-6">
            <!-- Form Element sizes -->
          

            <!-- general form elements disabled -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Metrics</h3>
                </div>

                <form method="post">
                <div class="card-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Height</span>
                     </div>
                  
                    <input type="text" name="he" class="form-control" value="<?php echo $_SESSION["altura"]?>" placeholder="Cm">
                    <span class="input-group-append">
                    </span>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Weight</span>
                     </div>
                    <input name="peso" type="text" class="form-control" value="<?php echo $_SESSION["peso"]?>" placeholder="Kg">
                    <span class="input-group-append">
                    </span>
                  </div> 



           
                  <!-- /input-group -->
                </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" style="background-color:#17a2b8;" name="uploadPD">
                </div>
                </form>
              
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->

<!-- ./wrapper -->

<?php
  echo "<script>bsCustomFileInput.init();alert('hihihihih')</script>";
?>
