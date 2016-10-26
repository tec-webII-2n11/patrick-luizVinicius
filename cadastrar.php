<!DOCTYPE html>

<?php
   $nome = $_POST["nome"]; 
   $email = $_POST["email"]; 
   $confirmarEmail = $_POST["confirmarEmail"];
   $pass = $_POST["pass"];
   $confPass = $_POST["confPass"];
   $termos = $_POST["termos"];
   
   $erro = 0; 
   
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
   
   
   if ($erro==0) { 
        $mensagem = "Você foi cadastrado com sucesso!";
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