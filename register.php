<!-- #2a75ff-->
<!-- create table users(id,email,nome,password,ConfCodeEmail,emailConf) -->
<!-- #2a75ff-->

<html>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .justified {
      text-align: justify
    }

    body {
      background-color: #1B1A1A;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>DetiCare</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p style="color: #2a75ff;">Register</p>
        </header>
        
        <form method="post" action="#" id="regista">
          <div class="row gy-4" id="uauas">

            <div class="col-md-6">
              <input font-family="roboto" type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-md-6 ">
              <input font-family="roboto" type="text" id="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>

            <div class="col-md-6">
              <input font-family="roboto" type="Password" class="form-control" id="pass" name="pass" placeholder="Password" required>
            </div>
            <div class="col-md-6">
              <input font-family="roboto" type="Password" id="confpass" class="form-control" name="confpass" placeholder="Confirm Password" required>
            </div>
            <script type="text/javascript">
              var h = '';

              function verify() {

                var a = document.getElementById('email').value;
                var b = document.getElementById('name').value;
                var x = document.getElementById('pass').value;
                var x2 = document.getElementById('confpass').value;
                var d = b.length;
                if (x != '' && x2 != '' && a != '' && b != '') {
                  if (document.forms[0].email.value == "" || document.forms[0].email.value.indexOf('@') == -1 || document.forms[0].email.value.indexOf('.') == -1) {
                    err = "Por favor, insira um E-MAIL válido!";
                  } else {
                    if (d < 3 || d > 20) {
                      err = "Por favor, insire um nome entre 3 e 20 caracteres!";
                    } else {
                      if (x == x2) {
                        document.getElementById('regista').submit();
                      } else {
                        err = "Passwords não coincidem!";
                      }
                    }
                  }
                } else {
                  err = "Os campos nao estao todos preenchidos!";
                }
                if (h != '') {
                  h.remove();
                }
                h = document.createElement("H2") // Create a <h1> element
                h.style.fontFamily = "roboto";
                var t = document.createTextNode(err); // Create a text node
                h.appendChild(t);
                document.getElementById('uauas').appendChild(h);
              }
            </script>


          </div>
        </form>
        <div class="col-md-12 text-center">
          <button onclick="verify()">Submit</button>
        </div>
      </div>
      <?php
      include 'BD.php';
      ?>
      <?php
      if (isset($_POST['confpass'])) {
        if (isset($_POST['email']) ) {
         
          $query = "SELECT id FROM users where email=?";
          $statement = $conn->prepare($query);
          $statement->bind_param('s', $_POST['email']);
          $statement->execute();
          $statement->bind_result($id);
          if ($statement->fetch()) {
            echo '<h2 style="font-family:roboto;">O Email que colocou ja esta registado</h2>';
            $statement->close();
          } else {
            $statement->close();
            $seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ' . '0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];
            $p = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $query = "INSERT INTO users(email,nome,password,ConfCodeEmail,emailConf) VALUES(?,?,?,?,?)";
            $statement = $conn->prepare($query);
            $ya = 'N';
            $statement->bind_param('sssss', $_POST['email'], $_POST['name'], $p, $rand, $ya);
            if ($statement->execute() && $statement->affected_rows > 0) {
              $statement->close();
              echo "<script type='text/javascript'>window.location.href = 'csv_upload.php';</script>";
            } else {
              echo "<h4>Ocorreu um erro na insereção</h4>";
            }
          }
        }
      }

      $conn->close();
      ?>

    </section><!-- End Contact Section -->


  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>