<!DOCTYPE html >
<html >
<head>
<meta >
<title>Upload</title>
</head>

<body>
<?php
	session_start();
	include 'BD.php';
	include 'Entrar.php';
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
					echo "O ficheiro foi inserido";
				}else{
					echo "Ocorreu um erro na Inserecao";
				}
				
				$statement->close();
				$page=shell_exec("python Code/xlsx_to_csv.py " .$destino. " ".$file_name); 
				
			}else{
			    echo "Erro no upload";
			}

		}else
			echo "Este servidor não suporta este tipo de ficheiros";
	}

?>
 <button onclick="document.location='graph.html'">Graphic</button> 



 <h1>TESTES SESSAO</h1>
	<?php
		echo "<h1>".$_SESSION["id"]."</h1>";
		echo "<h1>".$_SESSION["email"]."</h1>";
		echo "<h1>".$_SESSION["nome"]."</h1>";
		echo "<h1>".$_SESSION["sessao"]."</h1>";
	?>

</body>
</html>