<!DOCTYPE html>
<html>
<body>
<?php

    $usu = $_POST['name'];
    $newdesc = strip_tags($_POST['newdesc']);

    include "sqlconecta.php";
    
    $upd = "UPDATE user SET info='".$newdesc."' WHERE username = '".$usu."'";
    mysqli_query($conexao,$upd) or die("Erro: ".mysqli_error());
    //echo($att);
    
    mysqli_close($conexao);
    
    header("Location: conta.php");
?>
</body>
</html>