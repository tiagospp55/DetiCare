<select name="med" id="med" style="width:88%;">
<option value="-1">Escolher</option>
<?php
	$conne=new mysqli('localhost','root','','peebd2');
    $sql = "SELECT * FROM users WHERE idMedico=".$_SESSION["id"]." ORDER BY nome";
    $result = mysqli_query($conne,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo'<option value ="'.$row['id'].'">'.$row['nome'].'</option>';
        }
    }
?>
</select>