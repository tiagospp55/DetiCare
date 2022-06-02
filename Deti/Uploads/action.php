<?php
	session_start();
	$conn=new mysqli('localhost','root','','peebd');

	if($conn->connect_error){
		die("ERROR: (".$conn->errno.")->".$conn->error);
	}else{
		echo "<script>console.log('Connected');</script>";
	}


	if (isset($_POST["upload"])) { 
		$file_name = $_FILES["filesu"]["name"];
		$value = $_POST["form_id"];
		$destino_xlsx = "Files";
		
		if($_FILES["filesu"]["type"]=="application/vnd.ms-excel" || $_FILES["filesu"]["type"]=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
			if(move_uploaded_file($_FILES["filesu"]["tmp_name"], $file_name)) {
			//	$query="INSERT INTO csv(path, type, date) VALUES(?,?, now())";
				
			//	$statement=$conn->prepare($query);
			//	$statement->bind_param('ss',$destino,  $_POST["form_id"] );

			//	if ($statement->execute() && $statement->affected_rows>0){
			//		echo "O ficheiro foi inserido";
					
			//	}else{
			//		echo "Ocorreu um erro na Inserecao";
			//	}
				
			//	$statement->close();
				
				if($value == 1){
					$page=shell_exec("python xlsx2csv_and_change_name.py ../" . $file_name . " "  . $_SESSION["id"] . " ./Files/Blood_Pressure/");
					$page=shell_exec("python merge_files_csv.py ". $_SESSION["id"] ." Blood_Pressure/");  
					$page=shell_exec("python processar_blood_pressure.py ./Files/Blood_Pressure/" . $_SESSION["id"] . "_merged.csv");
					$page=shell_exec("python base_temporal.py ./Files/Blood_Pressure/" .$_SESSION["id"]. "_merged_calculado.csv 1");
					$page=shell_exec("python base_temporal.py ./Files/Blood_Pressure/" . $_SESSION["id"] ."_merged_calculado.csv 7");
					$page=shell_exec("python base_temporal.py ./Files/Blood_Pressure/" . $_SESSION["id"] . "_merged_calculado.csv 30");
					$page=shell_exec("python base_temporal.py ./Files/Blood_Pressure/" . $_SESSION["id"] . "_merged_calculado.csv 365");
					
				}elseif ($value == 2){
					$page=shell_exec("python xlsx2csv_and_change_name.py ../BloodPressure_202108-202201.xlsx 2 ./Files/Oximeter/"); 
					$page=shell_exec("python merge_files_csv.py 2 Oximeter/"); 
					$page=shell_exec("python processar_blood_pressure.py "); 
					echo "1234";
				}

				
				header("Location: ../Frontend/index.php");



			}else{
			    echo "Erro no upload";
			}

		}else
			header("Location: ../Frontend/index.php");
			
			//echo "<script>alert('Bruh')</script>";
			//echo "Este servidor não suporta este tipo de ficheiros";
		}
?>