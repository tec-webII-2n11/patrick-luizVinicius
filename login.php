<?php
    include"sqlconecta.php";
    
    $username = strip_tags($_POST["username"]);
    $pass = strip_tags($_POST["pass"]);
    
    $erro = 0;
    
    $selectcad = "SELECT username FROM user WHERE username = '$username'";
    $select = mysqli_query($conexao,$selectcad);
    $array = mysqli_fetch_array($select);
    $userdata = $array['username'];
    
    if($userdata == $username){
        $selectpas = "SELECT pass FROM user WHERE pass = '$pass'";
        $select2 = mysqli_query($conexao,$selectpas);
        $array2 = mysqli_fetch_array($select2);
        $passdata = $array2['pass'];
            if($passdata == $pass){
                
                setcookie('usuario',$username,time()+(24*60*60*7));
                setcookie('senha',$pass,time()+(24*60*60*7));
            
                header("Location: index.php");
            }
            else{
                $mensagem = "Senha incorreta";
                $erro = 1;
            }
        if($userdata != $username){
        $mensagem = "Username não existe";
        $erro = 1;
    }
    }
?>

<html>
    <head>
        <title> CatBag - Login </title>
        <meta charset="UTF-8">
        <meta name="Author" content="Luiz Vinicius A. Pinheiro - 31477054">
        <meta name="Author" content="Patrick Andrade - 31527914">
        <?php include "includes/head.inc"; ?>
    
    </head>

    <body>
        <?php include "includes/matbody.inc"; ?>
        <?php include "includes/header.inc"; ?>
     
         <div class="container">
        <div class="row">
          <div class="col s12">
            <div class="card-panel grey lighten-3">
              <span class="text"><?php echo($mensagem); ?>
              </span>
            </div>
          </div>
        </div>
        </div>
        
        <?php include "includes/footer.inc"; ?>
    </body>


</html>