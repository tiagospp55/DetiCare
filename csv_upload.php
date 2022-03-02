<!DOCTYPE html >
<html >
<head>
<meta >
<title>Upload</title>
</head>

<body>
<?php

	$conn=new mysqli('localhost','root','','peebd');

	if($conn->connect_error){
		die("ERROR: (".$conn->errno.")->".$conn->error);
	}else{
		echo "<script>console.log('Connected');</script>";
	}

?>
<form enctype="multipart/form-data" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="100000000">
Ficheiro: <input name="filesu" type="file">  
Nome:<input type="text" name="nome" id="nome">
<input type="submit" name="upload">
</form>
<?php
	if (isset($_POST["upload"])) {
		$destino ="Files/Folder_XLSX/" . uniqid() . $_FILES["filesu"]["name"]; 
		$file_name = $_POST["nome"];
		if($_FILES["filesu"]["type"]=="application/vnd.ms-excel" || $_FILES["filesu"]["type"]=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
			if(move_uploaded_file($_FILES["filesu"]["tmp_name"], $destino)) {
				$query="INSERT INTO csv(path,name, date) VALUES(?,?, now())";
				
				$statement=$conn->prepare($query);
				$statement->bind_param('ss',$destino,  $_POST["nome"] );

				if ($statement->execute() && $statement->affected_rows>0){
					echo "A imagem foi inserida";
				}else{
					echo "Ocorreu um erro na Inserecao";
				}
				
				$statement->close();
				$page=shell_exec("python xlsx_to_csv.py " .$destino. " ".$file_name); 

			}else{
			    echo "Erro no upload";
			}

		}else
			echo "Este servidor não suporta este tipo de ficheiros";
	}
?>
 <button onclick="document.location='graph.html'">Graphic</button> 
</body>
</html>