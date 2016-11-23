<!DOCTYPE html>
<?php
    $capturar = $_COOKIE['usuario'];
    include"sqlconecta.php";
    $resultado = "SELECT uID, username, info, prof FROM user WHERE username = '$capturar'";
    $pega = mysqli_query($conexao,$resultado);
    $infos = mysqli_fetch_array($pega);
    
    $uID = $infos['uID'];
    
    ?>

<html>
    <head>
        <title> CatBag - Novo Post </title>
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
                <form method='POST' enctype="multipart/form-data" action='zpost.php'>
                    
                    <input type="hidden" name="name" value="<?=  $_COOKIE['usuario'] ?>"/>
                    <input type="hidden" name="uID" value="<?=  $uID ?>"/>
                    
                    <label for="text">Titulo:</label>
                    <input type="text" id = "titulo" name="titulo" />
                    
                    <label for="pic">Imagem:</label>
                    <br>
                   <input type="file" name="pic" id="pic">
                   <input type="hidden" name="MAX" value="2500000">
                   <br>
                   <br>
                    
                    <input type="submit" name="Postar!"/>
                    
                </form>
            </div>
        </div>
    </div>
    </div>
    
     <?php include "includes/footer.inc"; ?>
    </body>