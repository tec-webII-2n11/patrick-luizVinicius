<!DOCTYPE html>

<?php
    include"sqlconecta.php";
    
    $username = strip_tags($_POST["username"]);
    $pass = md5(strip_tags($_POST["pass"]));
    
    $erro = 0;
    
    $selectcad = "SELECT username, pass, status FROM user WHERE username = '$username' AND pass = '$pass'";
    $select = mysqli_query($conexao,$selectcad);
    $array = mysqli_fetch_array($select);
    
    if($array['username'] && $array['pass'] && $array['status']=='a'){
        $erro = 0;
            setcookie('adm',$username,time()+(24*60*60));
    }
    else{
        $erro = 1;
        header("Location: adm.php");
    }
    ?>
<html>
    <head>
        <title> CatBag - Painel</title>
        <meta charset="utf-8">
        <meta name="Author" content="Luiz Vinicius A. Pinheiro - 31477054">
        <meta name="Author" content="Patrick Andrade - 31527914">
        <?php include "includes/head.inc"; ?>
    
    </head>

    <body>
        <?php include "includes/matbody.inc"; ?>
        <?php include "includes/header.inc"; ?>
        
        <div class = "container">
            <form action="adm3.php" method="POST">
                <label for="vitima">Buscar Usuario:</label>
                <input id="vitima" name="vitima" type="text" size="25" required/>
            
                <input class="waves-effect waves-light btn" type="submit" value="Buscar"/>
            </form>
        </div>
        
        
         <?php include "includes/footer.inc"; ?>
    </body>
</html>