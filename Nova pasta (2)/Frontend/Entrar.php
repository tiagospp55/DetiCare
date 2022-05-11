<?php
		if (!empty($_POST["login2"])){
			if($_POST["login2"]=="in"){
				$qa="SELECT id,email,nome,password,Disponivel,idMedico,peso,idade,altura,DataNascimento,Telemovel,Localidade FROM users where email=?";
				$sa=$conn->prepare($qa);
				$sa->bind_param('s',$_POST['maillog']);
				$sa->execute();
				$sa->bind_result($id,$email,$nome,$pass,$eb,$med,$peso,$idd,$alt,$DN,$tl,$lc);
				$sa->fetch();
				if ($eb!='NAO') {
					if (password_verify($_POST['passlog'], $pass)) {
						$_SESSION["id"]=$id;
						$_SESSION["email"]=$email;
						$_SESSION["nome"]=$nome;
						$_SESSION["medico"]=$med;
						$_SESSION["peso"]=$peso;
						$_SESSION["idade"]=$idd;
						$_SESSION["altura"]=$alt;
						$_SESSION["DN"]=$DN;
						$_SESSION["nmr"]=$tl;
						$_SESSION["loc"]=$lc;
						$_SESSION["med"]="N";
						$_SESSION["sessao"]=session_id();
						header("location: index.php");
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