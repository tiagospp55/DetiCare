<?php
		if (!empty($_POST["login2"])){
			if($_POST["login2"]=="in"){
				$qa="SELECT id,email,nome,password,Disponivel FROM users where email=?";
				$sa=$conn->prepare($qa);
				$sa->bind_param('s',$_POST['maillog']);
				$sa->execute();
				$sa->bind_result($id,$email,$nome,$pass,$eb);
				$sa->fetch();
				if ($eb!='NAO') {
					if (password_verify($_POST['passlog'], $pass)) {
						$_SESSION["id"]=$id;
						$_SESSION["email"]=$email;
						$_SESSION["nome"]=$nome;
						$_SESSION["sessao"]=session_id();
					}
				}else{
					$smg="A sua conta não se encontra disponivel. Para mais informações contacte-nos em email@gmail.com";
				}
				$sa->close();	
			}else{
				$_SESSION["id"]="";
				$_SESSION["email"]="";
				$_SESSION["nome"]="";
				$_SESSION["sessao"]="";
							
				header("location: login.php");
			}
		}

	?>