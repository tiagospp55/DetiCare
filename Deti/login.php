<?php session_start(); ?>

<html>		
	<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DetiCare</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

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
        
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main" >

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" >

      <div class="container" data-aos="fade-up" >

        <header class="section-header" >
          <p style="color: #2a75ff;">Register</p>
        </header>
            <form method="post" action="#" id="regista" >
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
			function verify(){
			
				var a=document.getElementById('email').value;
				var b=document.getElementById('name').value;
				var x=document.getElementById('pass').value;
				var x2=document.getElementById('confpass').value;
				var d = b.length;
				if (x!='' && x2!='' && a!='' && b!='') {
					if( document.forms[0].email.value=="" || document.forms[0].email.value.indexOf('@')==-1 || document.forms[0].email.value.indexOf('.')==-1 )
					{
						err= "Por favor, insira um E-MAIL válido!" ;
					}else{
						if(d<3 || d>20){
							err= "Por favor, insire um nome entre 3 e 20 caracteres!" ;
						}
						else{
							if(x==x2){
								document.getElementById('regista').submit();										
							}
							else{
								err= "Passwords não coincidem!" ;
							}
						}
					}
				}else{
					err= "Os campos nao estao todos preenchidos!" ;
				}
				if (h != '') {
					h.remove();
				}
				h = document.createElement("H2")       // Create a <h1> element
				h.style.fontFamily="roboto";
				var t = document.createTextNode(err);     // Create a text node
				h.appendChild(t); 
				document.getElementById('uauas').appendChild(h);
			}

			function sair(){
				window.location.href = "Sair.php";
			}
		</script>
                

              </div>
            </form>
            <div class="col-md-12 text-center">
                <button onclick="verify()">Submit</button>
            </div>
      </div>
    

	<!-- Retirei merdas daqui 1 -->
	<?php
		include 'BD.php';
		include 'Entrar.php';
	 ?>
	<h1>Login</h1>
	<form method="POST">
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="maillog"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="passlog"></td>
			</tr>
		</table>
		<input type="submit" value="in" name="login2">
	</form>


	<h1>TESTES COM SESSAO</h1>
	<button onclick="sair()" value="out" name="login2">Out</button>


	<?php
		echo "<h1>".$_SESSION["id"]."</h1>";
		echo "<h1>".$_SESSION["email"]."</h1>";
		echo "<h1>".$_SESSION["nome"]."</h1>";
		echo "<h1>".$_SESSION["sessao"]."</h1>";
	?>


	<?php  
		$conn->close();
	?>
</body>
</html>