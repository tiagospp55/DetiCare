<?php 
  include "BD.php";
  session_start();
  if (isset($_POST['uploadPD'])){
    $query = "UPDATE users SET peso=?,altura=? WHERE id=?";
    $statement = $conn->prepare($query);
    $statement->bind_param('sss',$_POST['peso'],$_POST['he'],$_SESSION["id"]);
    if ($statement->execute() && $statement->affected_rows > 0) {
      $statement->close();
      $_SESSION["peso"]=$_POST['peso'];
      $_SESSION["altura"]=$_POST['he'];


      $query = "INSERT INTO dados".$_SESSION["id"]."(peso,altura,dataInser,IMC) VALUES(?,?,?,?)";
      $statement = $conn->prepare($query);
      $dataIn = date("Y-m-d");
      $imc=$_POST['peso']/$_POST['he']*$_POST['he'];
      $statement->bind_param('ssss',$_POST['peso'],$_POST['he'],$dataIn,$imc);
      if ($statement->execute() && $statement->affected_rows > 0) {
        $statement->close();
      }

      echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    } else {
      $query = "INSERT INTO dados".$_SESSION["id"]."(peso,altura,dataInser,IMC) VALUES(?,?,?,?)";
      $statement = $conn->prepare($query);
      $dataIn = date("Y-m-d");
      $imc=$_POST['peso']/($_POST['he']*$_POST['he']);
      $imc = $imc * 10000;
      
      $statement->bind_param('ssss',$_POST['peso'],$_POST['he'],$dataIn,$imc);
      if ($statement->execute() && $statement->affected_rows > 0) {
        $statement->close();
      }
      echo "<h4>Ocorreu um erro na insereção</h4>";
      echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    }
  }
?>
