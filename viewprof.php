<!DOCTYPE html>

<?php
    $pid = $_GET['id'];
    
    include"sqlconecta.php";
    $resultado = "SELECT uID, username, info, prof FROM user WHERE uID = '$pid'";
    $pega = mysqli_query($conexao,$resultado);
    $infos = mysqli_fetch_array($pega);
    
    
    if($infos['prof']==""){
        $avatar = 'img/nopic.png';
    }
    else{$avatar = $infos['prof'];}
    
    $title = $infos['username'];
    
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
        <br>
        <br>
         <div class = "container">
            <div class="row">
              <div class="col s4">
                  <img src="<?php echo($avatar); ?>" alt="<?php echo($title); ?>" width="256px" class="circle responsive-img z-depth-2">
              </div>
             
              <div class="col s8">
                 <h3><?php echo($infos['username']); ?> </h3> 
                 <br>
                 <br>
                 <p><?php echo($infos['info']); ?></p>
              </div>
              
            </div>
            <br>
            <div = "container">
                <h4>Posts: </h4>
                <?php
                include"sqlconecta.php";
                $line = "SELECT pID, uID, user, titulo, pic FROM post WHERE uID = '$pid' ORDER BY pID DESC";
                $result = mysqli_query($conexao,$line);
                
                if($result){
                    while ($row = mysqli_fetch_array($result)){
                        echo '<div = "container">';
                             echo '<h5><a href="viewpost.php?id='.$row['pID'].'" class="orange-text text-darken-4">'.$row['titulo']. '</a></h5>';
                        echo '</div>';
                        
                    }}
                ?>
            </div>
            
        </div>
        <?php include "includes/footer.inc"; ?>
    </body>
</html>