<?php
          $conne=new mysqli('localhost','root','','peebd2');
          $sql = "SELECT * FROM medicos ORDER BY id";
          $result = mysqli_query($conne,$sql);
          if(mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_array($result))    
               {
                    echo'<option value ="'.$row['id'].'">'.$row['nome'].'('.$row['localTrabalho'].')</option>';
               }
          }
?>      