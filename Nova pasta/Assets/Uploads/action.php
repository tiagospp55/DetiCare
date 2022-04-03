<?php
	$conn=new mysqli('localhost','root','','peebd');

	if($conn->connect_error){
		die("ERROR: (".$conn->errno.")->".$conn->error);
	}else{
		echo "<script>console.log('Connected');</script>";
	}


	if (isset($_POST["upload"])) { 
		$file_name = $_FILES["filesu"]["name"];
		$value = $_POST["form_id"];
		
		if($_FILES["filesu"]["type"]=="application/vnd.ms-excel" || $_FILES["filesu"]["type"]=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
			if(move_uploaded_file($_FILES["filesu"]["tmp_name"], $destino)) {
				$query="INSERT INTO csv(path, type, date) VALUES(?,?, now())";
				// Temos que tirar daqui o envio de xlsx para base de dados
				$statement=$conn->prepare($query);
				$statement->bind_param('ss',$destino,  $_POST["form_id"] );

				if ($statement->execute() && $statement->affected_rows>0){
					echo "O ficheiro foi inserido";
					
				}else{
					echo "Ocorreu um erro na Inserecao";
				}
				
				$statement->close();
				$page=shell_exec("python xlsx_to_csv.py " .$destino. " ".$file_name. " " .$value); 
				
				header("Location: ../../index.php");
			}else{
			    echo "Erro no upload";
			}

		}else
			header("Location: ../../index.php");
			//echo "<script>alert('Bruh')</script>";
			//echo "Este servidor não suporta este tipo de ficheiros";

	}
?>