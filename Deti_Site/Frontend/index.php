<?php 
  session_start();

  /*
  if (isset($_SESSION["last_page"])) {
    echo "<script>alert('" . $_SESSION["last_page"] . "')</script>";
  }
  
  if ($_SESSION["sessao"]=="") {
    header("location: login_t.php");
  }*/
  $_SESSION["last_page"] = 'profileMed.php';
  if (!isset($_SESSION["last_page"])) {
    if ($_SESSION["med"]=="N") {
      $_SESSION["last_page"] = 'profile.php';
    }else{
      $_SESSION["last_page"] = 'profileMed.php';
    }
    
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DetiCare</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../AdminLTE/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../AdminLTE/plugins/fontawesome-free-6.1.1-web/css/all.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?php
          if ($_SESSION["med"]=="N") {    
        ?>
        <a class="nav-link" onclick="go_to('profile.php')">Profile</a>
        <?php
          }else{
        ?>
          <a class="nav-link" onclick="go_to('profileMed.php')">Profile</a>
        <?php
          }
        ?>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" onclick="go_to('contacts.php')">Contact</a>
      </li>
      <?php
        if ($_SESSION["med"]=="N") {
      ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" onclick="go_to('upload.php')">Uploads</a>
      </li>
      <?php
        }
      ?>
      <?php
        if ($_SESSION["med"]=="S") {
      ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link"><?php include "ListaDePacientes.php";?></a>
      <?php
        }
      ?>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="LogOut.php" role="button">
        <i class="fa-solid fa-right-from-bracket"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">      
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      
      <span class="brand-text font-weight-light">DetiCare </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["nome"]?></a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <?php
              if ($_SESSION["med"]=="N") {
              
            ?>
              <a onclick="go_to('profile.php')" class="nav-link " id="profile">
            <?php
              }else{
            ?>
              <a onclick="go_to('profileMed.php')" class="nav-link " id="profile">
            <?php
              }
            ?>
              <i class="fa-solid fa-user nav-icon"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <?php
            if ($_SESSION["med"]=="N") {
          ?>
          <li class="nav-item ">
            <a onclick="go_to('upload.php')" class="nav-link " id="upload">
              <i class="fa-solid fa-file-upload nav-icon" ></i>
              <p>
              
                Uploads
              </p>
            </a>
          </li>
          <?php
            }
          ?>
          <li class="nav-item ">
            <a onclick="go_to('graph.php')" class="nav-link " id="graph">
              <i class="fa-solid fa-heart nav-icon "></i>
              <p>
              Hearth Rate
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a onclick="go_to('graph2.php')" class="nav-link " id="graph2">
              <i class="fa-solid fa-lungs nav-icon "></i>
              <p>
              Oxygen
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a onclick="go_to('graph3.php')" class="nav-link " id="graph3">
              <i class="nav-icon fa-solid fa-weight-scale"></i>
              <p>
              IMC
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a onclick="go_to('contacts.php')" class="nav-link " id="contacts">
              <i class="fa-solid fa-address-card nav-icon"></i>
             
              <p>
              Contacts
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper" id="content">

  </div>

  <footer class="main-footer">
    <strong>DetiCare</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../AdminLTE/plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE/dist/js/adminlte.js"></script>
<!-- bs-custom-file-input -->
<script src="../AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


<!-- Page specific script -->

<?php include("functions.php")?>

<script>
  $(document).ready(function () {
    page = '<?php echo $_SESSION["last_page"]; ?>';

    if (page) {
      go_to(page);
    }
  });

  function go_to(page) {
    const menu_id = page.replace('.php', '');
    fetch("pages/"+page)
      .then(response => response.text())
      .then(text => document.getElementById("content").innerHTML = text)
      .then(() => {
        document.querySelectorAll('.nav-link').forEach(function(nav_link) {
          nav_link.classList.remove('active');
        });
        document.getElementById(menu_id).classList.add('active');

        if (page == 'graph.php') {
          make_graph_Hearth_Rate();
        }

      });

  }

  
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
          
            $(document).ready(function(){
            $('#med').change(function(){
                //Selected value
                var inputValue = $(this).val();

                //Ajax for calling php function
                $.post('Calendar.php', { dropdownValue: inputValue }, function(data){
                    window.location.reload();
                    //do after submission operation in DOM
                });
            });
        });
        </script>

</body>
</html>


<!-- <?php //include("bruh.html")?>-->

