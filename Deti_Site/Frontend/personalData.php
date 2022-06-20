<?php 
  include "BD.php";
  session_start();
  if (isset($_POST['uploadPD'])){
    $query = "UPDATE users SET Telemovel=?,Localidade=?,idMedico=? WHERE id=?";
    $statement = $conn->prepare($query);
    $statement->bind_param('ssss',$_POST['nmr'],$_POST['lc'],$_POST['med'],$_SESSION["id"]);
    if ($statement->execute() && $statement->affected_rows > 0) {
      $statement->close();
      $_SESSION["nmr"]=$_POST['nmr'];
      $_SESSION["loc"]=$_POST['lc'];
      $_SESSION["medico"]=$_POST['med'];
      echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    } else {
      echo "<h4>Ocorreu um erro na insereção</h4>";
    }
  }
?>