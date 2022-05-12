<!DOCTYPE html>
<html lang="en">
<?php
  include 'BD.php';
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DetiCare | Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Deti</b>Care</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="post" action="#" id="regista">
        <div class="input-group mb-3">
          <input type="text" name="name" id="name" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="confpass" name="confpass" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" id="confpass" name="confpass" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="med" id="med" style="width:88%;">
            <option value="-1">None</option>
            <?php include 'RegMedicos.php';?>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
      
      <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I am a doctor
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button onclick="verify()" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php
      if (isset($_POST['confpass'])) {
        if (isset($_POST['email']) ) {
          if (isset($_POST['terms'])) {
            $query = "SELECT id FROM medicos where email=?";
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
              $query = "INSERT INTO medicos(nome,localTrabalho,email,pass) VALUES(?,'desconhecido',?,?)";
              $statement = $conn->prepare($query);
              $ya = 'N';
              $statement->bind_param('sss', $_POST['name'],$_POST['email'], $p);
              if ($statement->execute() && $statement->affected_rows > 0) {
                $statement->close();
                echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
              } else {
                echo "<h4>Ocorreu um erro na insereção</h4>";
              }
            }
          }else{
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
              $query = "INSERT INTO users(email,nome,password,ConfCodeEmail,emailConf,Disponivel,idMedico) VALUES(?,?,?,?,?,'SIM',?)";
              $statement = $conn->prepare($query);
              $ya = 'N';
              $statement->bind_param('ssssss', $_POST['email'], $_POST['name'], $p, $rand, $ya,$_POST['med']);
              if ($statement->execute() && $statement->affected_rows > 0) {
                $statement->close();
                echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
              } else {
                echo "<h4>Ocorreu um erro na insereção</h4>";
              }
            }
          }
        }
      }

      $conn->close();
      ?>
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
                        err='';
                        document.getElementById('regista').submit();
                      } else {
                        err = "Passwords não coincidem!";
                      }
                    }
                  }
                } else {
                  err = "Os campos nao estao todos preenchidos!";
                }
                if (err!='') {alert(err);}
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
      <p><a href="login_t.php" class="text-center">I already have a membership</a>
    </p></div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

<!-- /.register-box -->

<!-- jQuery -->
<script src="../AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
