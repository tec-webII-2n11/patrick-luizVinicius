<!DOCTYPE html>

<?php
    include"sqlconecta.php";
    
   $nome = strip_tags($_POST["nome"]); 
   $email = strip_tags($_POST["email"]); 
   $confirmarEmail = strip_tags($_POST["confirmarEmail"]);
   $pass = strip_tags($_POST["pass"]);
   $confPass = strip_tags($_POST["confPass"]);
   $termos = strip_tags($_POST["termos"]);
   $username = strip_tags($_POST["username"]);
   
   $erro = 0; 
   
   $selectcad = "SELECT username FROM user WHERE username = '$username'";
   $select = mysqli_query($conexao,$selectcad);
   $array = mysqli_fetch_array($select);
   $userdata = $array['username'];
   
   if($userdata == $username){
       $mensagem = "Esse nome de usuario ja existe.<br>";
       $erro=1;
   }
   
   $selectmail = "SELECT email FROM user WHERE email = '$email'";
   $select3 = mysqli_query($conexao,$selectmail);
   $array3 = mysqli_fetch_array($select3);
   $emaildata = $array3['email'];
   
   if($emaildata == $email){
       $mensagem = "Esse email ja foi cadastrado.<br>";
       $erro=1;
   }
   
   if (empty($nome) OR strstr($nome, ' ')==FALSE) { 
    $mensagem = "Favor digitar seu nome completo.<br>";  
    $erro=1; 
   } 
   if (strlen($email) < 8 || strstr($email, '@') == FALSE) { 
    $mensagem = "Favor digitar o seu e-mail corretamente.<br>"; 
    $erro=1; 
   } 
   if ($confirmarEmail != $email) { 
    $mensagem = "Os e-mails não batem.<br>"; 
    $erro=1; 
   } 
   if ($confPass != $pass) { 
    $mensagem = "As senhas não batem.<br>"; 
    $erro=1; 
   } 
   if (empty($username) OR strstr($username, ' ')==TRUE) { 
    $mensagem = "Nome de Usuario invalido.<br>";  
    $erro=1; 
   } 
   if (strlen($pass) < 6 OR strstr($pass, ' ')==TRUE){
       $mensagem = "A senha deve conter no minimo 6 caracteres e não pode conter espaços.<br>"; 
    $erro=1;
   } 
   
   if ($erro==0) { 
        
        $add = "INSERT into user(username, pass, email, nome) VALUES('".$username."','".$pass."','".$email."','".$nome."')";
        mysqli_query($conexao,$add) or die("Erro no banco de dados: ".mysqli_error());
        
        $mensagem = "Você foi cadastrado com sucesso! Seu nome de usuario é: ".$username;
   } 
?> 

<html>
    <head>
        <title> CatBag - Cadastrado! </title>
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