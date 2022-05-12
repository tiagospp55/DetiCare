<?php 
	if ($_SESSION["peso"]=="") {
			echo "<input type='text' name='peso' style='width:80%;'>";
	}else{
		echo "<a class='float-right'>".$_SESSION["peso"]."</a>";
	}
?>