<?php
    session_start();
    $conne=new mysqli('localhost','root','','peebd2');
    if ($_POST['dropdownValue']){
        //call the function or execute the code
        $_SESSION['Pid'] = $_POST['dropdownValue'];
        $qa="SELECT id,email,nome,password,Disponivel,idMedico,peso,idade,altura,DataNascimento,Telemovel,Localidade FROM users where id=?";
        $sa=$conne->prepare($qa);
        $sa->bind_param('s',$_SESSION['Pid']);
        $sa->execute();
        $sa->bind_result($id,$email,$nome,$pass,$eb,$med,$peso,$idd,$alt,$DN,$tl,$lc);
        $sa->fetch();
        if ($eb!='NAO') {        
            echo "OLA".$_SESSION["Pnmr"]."OLA";
            $_SESSION["Pemail"]=$email;
            $_SESSION["Pnome"]=$nome;
            $_SESSION["Pmedico"]=$med;
            $_SESSION["Ppeso"]=$peso;
            $_SESSION["Pidade"]=$idd;
            $_SESSION["Paltura"]=$alt;
            $_SESSION["PDN"]=$DN;
            $_SESSION["Pnmr"]=$tl;
            $_SESSION["Ploc"]=$lc;
            $_SESSION["Pmed"]="N";
        }else{
            $smg="A sua conta não se encontra disponivel. Para mais informações contacte-nos em email@gmail.com";
        }
    }
?>
