<?php
  include '../BD.php';
  session_start();
  $_SESSION["last_page"] = "teste.php";
?>

<!-- Content Header (Page header) -->
<form method="post">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Teste</h1>
            <p>peso <input type="text" name="peso" value="<?php echo $_SESSION['peso']; ?>"></p>
            <p>altura <input type="text" name="alt" value="<?php echo $_SESSION['altura']?>"></p>
            <p>idade <input type="text" name="idd" value="<?php echo $_SESSION['idade']?>"></p>
            <p>dtnasc <input type="date" name="dtn" value="<?php echo $_SESSION['DN']?>"></p>
            <p>nmr <input type="text" name="nmr" value="<?php echo $_SESSION['nmr']?>"></p>
            <p>loc <input type="text" name="lc" value="<?php echo $_SESSION['loc']?>"></p>

        </div>        
      </div>
    </div>
  </section>
  <button type="submit" name="sub" value="yapoise">uauuuu</button>
</form>
<?php
  if (isset($_POST['sub'])){
    $query = "UPDATE users SET peso=?,idade=?,altura=?,DataNascimento=?,Telemovel=?,Localidade=? WHERE id=?";
    $statement = $conn->prepare($query);
    $statement->bind_param('sssssss',$_POST['peso'],$_POST['alt'],$_POST['idd'],$_POST['dtn'],$_POST['nmr'],$_POST['lc'],$_SESSION["id"]);
    if ($statement->execute() && $statement->affected_rows > 0) {
      $statement->close();
      $_SESSION["peso"]=$$_POST['peso'];
      $_SESSION["idade"]=$_POST['idd'];
      $_SESSION["altura"]=$_POST['alt'];
      $_SESSION["DN"]=$_POST['dtn'];
      $_SESSION["nmr"]=$_POST['nmr'];
      $_SESSION["loc"]=$_POST['lc'];
      echo "<script type='text/javascript'>window.location.href = '../index.php';</script>";
    } else {
      echo "<h4>Ocorreu um erro na insereção</h4>";
    }
  }
?>




