<?php

    if(isset($_COOKIE['usuario'])){
        $capturar = $_COOKIE['usuario'];
        
        include"sqlconecta.php";
        $selectcad = "SELECT uID FROM user WHERE username = '$capturar'";
        $select = mysqli_query($conexao,$selectcad);
        $array = mysqli_fetch_array($select);
        $uID = $array['uID'];
        
        $place = "Comente aqui...";
        
        $botao = '<input type="submit" name="Comentar"/>';
        }
    else{
        $place = "Faça o Login antes de comentar!";
        $botao = '<a href="entrar.php">Login</a>';
    }
?>

<!DOCTYPE html>

<?php
    $pid = $_GET['id'];
    
    include"sqlconecta.php";
    $resultado = "SELECT pID, uID, user, titulo, pic FROM post WHERE pID = '$pid'";
    $pega = mysqli_query($conexao,$resultado);
    $infos = mysqli_fetch_array($pega);
    
    $title = $infos['titulo'];
    $view = $infos['uID'];
    
?>
<html>
    <head>
        <title> CatBag - <?php echo($title) ?> </title>
        <meta charset="utf-8">
        <meta name="Author" content="Luiz Vinicius A. Pinheiro - 31477054">
        <meta name="Author" content="Patrick Andrade - 31527914">
        <?php include "includes/head.inc"; ?>
    
    </head>

    <body>
        <?php include "includes/matbody.inc"; ?>
        <?php include "includes/header.inc"; ?>
        <br>
    
         <div class = "container">
            <div>
                <h2 class="brown-text text-darken-4"><?= $infos['titulo'] ?></h2>
                <p class="grey-text">By <a href="viewprof.php?id=<?php echo($view) ?>" class="orange-text text-darken-4"><?= $infos['user'] ?> </a></p>
                <img class= "materialboxed responsive-img z-depth-2" src= "<?= $infos['pic'] ?>" alt= "<?= $infos['titulo'] ?>" width="80%">
            </div>
        
        </div>
        
        <div class ="container">
            <br>
            <h5>Comentários: </h5>
            <form method='POST' action='zcom.php'>
                <input type="hidden" name="name" value="<?=  $_COOKIE['usuario'] ?>"/>
                <input type="hidden" name="uID" value="<?= $uID ?>"/>
                <input type="hidden" name="pID" value="<?= $pid ?>"/>
                
                <input type="text" id = "texto" name="texto" placeholder="<?= $place ?>"/>
                    
                <?php echo($botao); ?>
            </form>
            <br>
           
            
            <?php
                include"sqlconecta.php";
                $ccc = "SELECT cID, pID, uID, user, texto, status FROM comen WHERE status != 'n' AND pID = '$pid' ORDER BY cID DESC";
                $seila = mysqli_query($conexao,$ccc);
                
                if($seila){
                    while ($row2 = mysqli_fetch_array($seila)){
                    
                    echo '<div width="80%" class ="card z-depth-2" >';
                    echo '<div class="card-content">';
                    echo '<a href="viewprof.php?id='.$row2['uID'].'" class="orange-text text-darken-4">'.$row2['user'].'</a>';
                    echo '<h5>'.$row2['texto']. '</h5>';
                    echo '</div>';
                    echo '</div>';
                    echo '<br>';
                    }}
                ?>
         </div>    
        
        
        <?php include "includes/footer.inc"; ?>
    </body>
</html>