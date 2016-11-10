<!DOCTYPE html>
<?php

    $usu = $_POST['name'];
    $uID = $_POST['uID'];
    $pID = $_POST['pID'];
    $texto = strip_tags($_POST['texto']);
    
    $erro = 0;
    
    if(empty($texto)){
        $erro = 1;
    }
    
     if($erro == 0){
         
        include "sqlconecta.php";
    
        $add = "INSERT into comen(pID, uID, user, texto) VALUES('".$pID."','".$uID."','".$usu."','".$texto."')";
        mysqli_query($conexao,$add) or die("Erro no banco de dados: ".mysqli_error());
       
        mysqli_close($conexao);
        
        header("Location: viewpost.php?id=$pID");
     }
     
      if($erro == 1){
         header("Location: viewpost.php?id=$pID");
     }
?>