<!DOCTYPE html>
<?php
    $capturar = $_COOKIE['usuario'];
    include"sqlconecta.php";
    $resultado = "SELECT uID, username, info, prof FROM user WHERE username = '$capturar'";
    $pega = mysqli_query($conexao,$resultado);
    $infos = mysqli_fetch_array($pega);
    
    ?>

<html>
    <head>
        <title> CatBag - Alterar Descrição </title>
        <meta charset="utf-8">
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
                <form method='POST' enctype="multipart/form-data" action='zpic.php'>
                    
                    <input type="hidden" name="name" value="<?=  $_COOKIE['usuario'] ?>"/>
                    
                   <input type="file" name="avatar" id="avatar">
                   <input type="hidden" name="MAX" value="2000000">
                   <br>
                   <br>
                   <br>
                   
                   <input type="submit" name="atualizar"/>
                    
                </form>
            </div>
        </div>
    </div>
    </div>
                    
                    
                    
 
     <?php include "includes/footer.inc"; ?>
    </body>
    