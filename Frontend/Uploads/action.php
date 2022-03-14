<?php
	$conn=new mysqli('localhost','root','','peebd');

	if($conn->connect_error){
		die("ERROR: (".$conn->errno.")->".$conn->error);
	}else{
		echo "<script>console.log('Connected');</script>";
	}
var_dump($_POST);

	if (isset($_POST["upload"])) {
        var_dump("true");
		$destino ="../../Files/Folder_XLSX/" . uniqid() . $_FILES["filesu"]["name"]; 
		$file_name = $_POST["nome"];

		if($_FILES["filesu"]["type"]=="application/vnd.ms-excel" || $_FILES["filesu"]["type"]=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
			if(move_uploaded_file($_FILES["filesu"]["tmp_name"], $destino)) {
				$query="INSERT INTO csv(path,name, date) VALUES(?,?, now())";
				
				$statement=$conn->prepare($query);
				$statement->bind_param('ss',$destino,  $_POST["nome"] );

				if ($statement->execute() && $statement->affected_rows>0){
					echo "O ficheiro foi inserido";
				}else{
					echo "Ocorreu um erro na Inserecao";
				}
				
				$statement->close();
				$page=shell_exec("python Code/xlsx_to_csv.py " .$destino. " ".$file_name); 
				header("Location: upload.php");
			}else{
			    echo "Erro no upload";
			}

		}else
			echo "Este servidor não suporta este tipo de ficheiros";
	}
?>