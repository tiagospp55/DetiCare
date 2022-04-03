<!DOCTYPE html>
<?php
  session_start();
  $_SESSION["last_page"] = "upload.php";
?>



<?php

	$conn=new mysqli('localhost','root','','peebd');

	if($conn->connect_error){
		die("ERROR: (".$conn->errno.")->".$conn->error);
	}else{
		echo "<script>console.log('Connected');</script>";
	}

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
              <form action="../../Uploads/action.php" method="POST" enctype="multipart/form-data">
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
                    
                  <label for="exampleInputFile">File input</label>
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