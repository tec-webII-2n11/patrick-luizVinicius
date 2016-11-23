<!DOCTYPE html>
<?php
    $vitima = strip_tags($_POST["usu"]);
    $pouc = strip_tags($_POST['pouc']);
    $num = strip_tags($_POST['num']);
    $stat = strip_tags($_POST['stat']);

    if($pouc == 'pID'){
    include "sqlconecta.php";
    
    $uhu = "UPDATE post SET status='".$stat."' WHERE username = '".$vitima."' AND pID = '".$num."'";
    mysqli_query($conexao,$uhu);
    //echo($att);
    
    mysqli_close($conexao);
    
    header("Location: adm2.php");
    }
    if($pouc == 'cID'){
    include "sqlconecta.php";
    
    $uhu = "UPDATE comen SET status='".$stat."' WHERE username = '".$vitima."' AND cID = '".$num."'";
    mysqli_query($conexao,$uhu);
    //echo($att);
    
    mysqli_close($conexao);
    
    header("Location: adm2.php");
        
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

        

         <?php include "includes/footer.inc"; ?>
    </body>
</html>