<!DOCTYPE html>

<?php
    
    $ok = 0;
    $vitima = strip_tags($_POST["vitima"]);
    include"sqlconecta.php";
    if(isset($_COOKIE['adm'])){
        $ok = 1;
    }
    else{
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
            <form action="adm4.php" method="POST">
                <input type="hidden" name="usu" value="<?= $vitima?>"/>
                
                <label for="pouc">pID (Post) ou cID (Comentario):</label>
                <input id="pouc" name="pouc" type="text" size="25" required/>
                
                <label for="num">Número:</label>
                <input id="num" name="num" type="text" size="25" required/>
                
                <label for="stat">y ou n:</label>
                <input id="stat" name="stat" type="text" size="25" required/>
                
                <input class="waves-effect waves-light btn" type="submit" value="Mudar"/>
            </form>
            <br>
            
            <p> POSTS:</p>
            <br>
            
            <?php
                $vitima = strip_tags($_POST["vitima"]);
                    include"sqlconecta.php";
                 $line = "SELECT pID, user, titulo, FROM post WHERE user = '$vitima'";
                $result = mysqli_query($conexao,$line);
                
                if($result){
                    while ($row = mysqli_fetch_array($result)){
                        echo '<div = "container">';
                             echo '<p>'.$row["pID"].' - '.$row["titulo"].'</p>';
                        echo '</div>';
                    }
                }
                    ?>
                    
            <p> COMENTARIOS:</p>
            <br>
            
            <?php
                    $vitima = strip_tags($_POST["vitima"]);
                    include"sqlconecta.php";
                 $line2 = "SELECT cID, user, texto, FROM comen WHERE user = '$vitima' ORDER BY cID DESC";
                $result2 = mysqli_query($conexao,$line2);
                
                if($result2){
                    while ($row2 = mysqli_fetch_array($result2)){
                        echo '<div = "container">';
                             echo '<p>'.$row2["cID"].' - '.$row2["texto"].'</p>';
                        echo '</div>';
                    }
                }
                    ?>
            
        </div>
        
        
         <?php include "includes/footer.inc"; ?>
    </body>
</html>