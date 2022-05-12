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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../Uploads/action.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <input type="text" id="form_id" name="form_id" value="1" hidden>
                    
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="filesu">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                   
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                </div>
              </form>
              
            </div>

            
            <!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "../Uploads/action.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <input type="text" id="form_id" name="form_id" value="3" hidden>
                    
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="filesu">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                   
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                </div>
              </form>
            </div>
            <!-- general form elements -->
           
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Personal Data</h3>
              </div>
              <div class="card-body">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Birthday</span>
                   </div>
                
                  <input type="text" class="form-control" placeholder="dd/mm/yyyy">
                  <span class="input-group-append">
                  <button type="button" class="btn btn-info btn-flat"><i class="fas fa-check"></i></button>
                  </span>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Phone Number</span>
                   </div>
                
                  <input type="text" class="form-control" placeholder="xxx xxx xxx">
                  <span class="input-group-append">
                  <button type="button" class="btn btn-info btn-flat"><i class="fas fa-check"></i></button>
                  </span>
                </div> 



         
                <!-- /input-group -->
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "../Uploads/action.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <input type="text" id="form_id" name="form_id" value="2" hidden>
                    
                  
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="filesu">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                </div>
              </form>
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "../Uploads/action.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <input type="text" id="form_id" name="form_id" value="4" hidden>
                    
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="filesu">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                   
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                </div>
              </form>
            </div>


            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Metrics</h3>
              </div>
              <div class="card-body">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Height</span>
                   </div>
                
                  <input type="text" class="form-control" placeholder="Cm">
                  <span class="input-group-append">
                  <button type="button" class="btn btn-info btn-flat"><i class="fas fa-check"></i></button>
                  </span>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Weight</span>
                   </div>
                
                  <input type="text" class="form-control" placeholder="Kg">
                  <span class="input-group-append">
                  <button type="button" class="btn btn-info btn-flat"><i class="fas fa-check"></i></button>
                  </span>
                </div> 



         
                <!-- /input-group -->
              </div>
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