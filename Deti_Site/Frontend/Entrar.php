<?php
	if (isset($_POST["doc"])) {
		
		if (!empty($_POST["login2"])){
			if($_POST["login2"]=="in"){
				$qa="SELECT id,nome,email,pass FROM medicos where email=?";
				$sa=$conn->prepare($qa);
				$sa->bind_param('s',$_POST['maillog']);
				$sa->execute();
				$sa->bind_result($id,$nome,$email,$pass);
				$sa->fetch();
				
				if (password_verify($_POST['passlog'], $pass)) {
					$_SESSION["id"]=$id;
					$_SESSION["email"]=$email;
					$_SESSION["nome"]=$nome;
					$_SESSION["med"]="S";
					$_SESSION["Pid"]=$id;
					$_SESSION["Pemail"]=$email;
					$_SESSION["Pnome"]=$nome;
					$_SESSION["Pmedico"]=$med;
					$_SESSION["Ppeso"]=$peso;
					$_SESSION["Pidade"]=$idd;
					$_SESSION["Paltura"]=$alt;
					$_SESSION["PDN"]=$DN;
					$_SESSION["Pnmr"]=$tl;
					$_SESSION["Ploc"]=$lc;
					$_SESSION["Pmed"]="N";
					$_SESSION["sessao"]=session_id();
					header("location: index.php");
				}else{
					$smg="Palavra pass incorreta";
				}

				$sa->close();	
			}else{
				$_SESSION["id"]="";
				$_SESSION["email"]="";
				$_SESSION["nome"]="";
				$_SESSION["medico"]="";
				$_SESSION["sessao"]="";
				$_SESSION["med"]="";
				$_SESSION["Pid"]="";
				$_SESSION["Pemail"]="";
				$_SESSION["Pnome"]="";
				$_SESSION["Pmedico"]="";
				$_SESSION["Ppeso"]="";
				$_SESSION["Pidade"]="";
				$_SESSION["Paltura"]="";
				$_SESSION["PDN"]="";
				$_SESSION["Pnmr"]="";
				$_SESSION["Ploc"]="";
				$_SESSION["Pmed"]="";			
				header("location: login.php");
			}
		}





	}else{
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
				$_SESSION["peso"]="";
				$_SESSION["idade"]="";
				$_SESSION["altura"]="";
				$_SESSION["DN"]="";
				$_SESSION["nmr"]="";
				$_SESSION["loc"]="";
				$_SESSION["med"]="";
				$_SESSION["sessao"]="";
							
				header("location: login.php");
			}
		}
	}
?>