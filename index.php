<!DOCTYPE html>

<html>
    <head>
        <title> CatBag </title>
        <meta charset="utf-8">
        <meta name="Author" content="Luiz Vinicius A. Pinheiro - 31477054">
        <meta name="Author" content="Patrick Andrade - 31527914">
        <?php include "includes/head.inc"; ?>
    
    </head>

    <body>
        <?php include "includes/matbody.inc"; ?>
        <?php include "includes/header.inc"; ?>
     
        
        <div class = "container">
                <div class="row">
                     <br>
                    <div class="col s2 brown darken-4 z-depth-2" style="text-align:center">
                      
                        <p class="white-text"> Destaque do Mês</p>
                    </div>
                </div>
                
                <?php
                $destaque = '3';
                include"sqlconecta.php";
                $line = "SELECT pID, uID, user, titulo, pic FROM post WHERE pID = '$destaque'";
                $result = mysqli_query($conexao,$line);
                
                if($result){
                    while ($row = mysqli_fetch_array($result)){
                        echo '<div = "container">';
                        
                        echo '<div = "row">';
                        
                        echo '<h2><a href="viewpost.php?id='.$row['pID'].'" class="brown-text text-darken-4">'.$row['titulo']. '</a></h2>';
                        
                        echo '<p class="grey-text">By <a href="viewprof.php?id='.$row['uID'].'" class="orange-text text-darken-4">'.$row['user'].'</a></p>';
                        
                        echo '<div class = "col s8 offset-s2">';
                        echo '<a href="viewpost.php?id='.$row['pID'].'"><img width="80%" class="responsive-img z-depth-2" src="'.$row['pic'].'" alt="'.$row['titulo'].'"></a>';
                        echo '</div>';
                        
                        echo '</div></div>';
                        echo '<br>';
                    }
                }
                
            ?>
            
            <div class="row">
                     <br>
                    <div class="col s2 brown darken-4 z-depth-2" style="text-align:center">
                      
                        <p class="white-text">#funny</p>
                    </div>
                </div>
            
                <?php
                $engra = '6';
                include"sqlconecta.php";
                $line = "SELECT pID, uID, user, titulo, pic FROM post WHERE pID = '$engra'";
                $result = mysqli_query($conexao,$line);
                
                if($result){
                    while ($row = mysqli_fetch_array($result)){
                        echo '<div = "container">';
                        
                        echo '<div = "row">';
                        
                        echo '<h2><a href="viewpost.php?id='.$row['pID'].'" class="brown-text text-darken-4">'.$row['titulo']. '</a></h2>';
                        
                        echo '<p class="grey-text">By <a href="viewprof.php?id='.$row['uID'].'" class="orange-text text-darken-4">'.$row['user'].'</a></p>';
                        
                        echo '<div class = "col s8 offset-s2">';
                        echo '<a href="viewpost.php?id='.$row['pID'].'"><img width="80%" class="responsive-img z-depth-2" src="'.$row['pic'].'" alt="'.$row['titulo'].'"></a>';
                        echo '</div>';
                        
                        echo '</div></div>';
                        echo '<br>';
                    }
                }
                
            ?>
            <div class="row">
                     <br>
                    <div class="col s2 brown darken-4 z-depth-2" style="text-align:center">
                      
                        <p class="white-text">   Kawaii-desu</p>
                    </div>
                </div>
            
            <?php
                $kawaii  = '2';
                include"sqlconecta.php";
                $line = "SELECT pID, uID, user, titulo, pic FROM post WHERE pID = '$kawaii'";
                $result = mysqli_query($conexao,$line);
                
                if($result){
                    while ($row = mysqli_fetch_array($result)){
                        echo '<div = "container">';
                        
                        echo '<div = "row">';
                        
                        echo '<h2><a href="viewpost.php?id='.$row['pID'].'" class="brown-text text-darken-4">'.$row['titulo']. '</a></h2>';
                        
                        echo '<p class="grey-text">By <a href="viewprof.php?id='.$row['uID'].'" class="orange-text text-darken-4">'.$row['user'].'</a></p>';
                        
                        echo '<div class = "col s8 offset-s2">';
                        echo '<a href="viewpost.php?id='.$row['pID'].'"><img width="80%" class="responsive-img z-depth-2" src="'.$row['pic'].'" alt="'.$row['titulo'].'"></a>';
                        echo '</div>';
                        
                        echo '</div></div>';
                        echo '<br>';
                    }
                }
                
            ?>

        </div>
        
        
        <?php include "includes/footer.inc"; ?>
    </body>


</html>
