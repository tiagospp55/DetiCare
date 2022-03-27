<?php
		if (!empty($_POST["login2"])){
			if($_POST["login2"]=="in"){
				$qa="SELECT id,email,nome,password,Disponivel,idMedico FROM users where email=?";
				$sa=$conn->prepare($qa);
				$sa->bind_param('s',$_POST['maillog']);
				$sa->execute();
				$sa->bind_result($id,$email,$nome,$pass,$eb,$med);
				$sa->fetch();
				if ($eb!='NAO') {
					if (password_verify($_POST['passlog'], $pass)) {echo "OL";
						$_SESSION["id"]=$id;
						$_SESSION["email"]=$email;
						$_SESSION["nome"]=$nome;
						$_SESSION["medico"]=$med;
						$_SESSION["sessao"]=session_id();
						header("location: login_t.php");
					}else{
						$smg="Palavra pass incorreta";
					}
				}else{
					$smg="A sua conta não se encontra disponivel. Para mais informações contacte-nos em email@gmail.com";
				}
				$sa->close();	
			}else{
				$_SESSION["id"]="";
				$_SESSION["email"]="";
				$_SESSION["nome"]="";
				$_SESSION["medico"]="";
				$_SESSION["sessao"]="";
							
				header("location: login.php");
			}
		}

	?>