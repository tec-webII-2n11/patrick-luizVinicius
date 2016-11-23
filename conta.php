<!DOCTYPE html>

<?php
    $capturar = $_COOKIE['usuario'];
    include"sqlconecta.php";
    $resultado = "SELECT uID, username, info, prof FROM user WHERE username = '$capturar'";
    $pega = mysqli_query($conexao,$resultado);
    $infos = mysqli_fetch_array($pega);
    
    
    if($infos['prof']==""){
        $avatar = 'img/nopic.png';
    }
    else{$avatar = $infos['prof'];}
    
    $title = $infos['username'];
    $view = $infos['uID'];
    
?>

<html>
    <head>
        <title> CatBag - Conta </title>
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
                 <h3><?php echo($capturar); ?> </h3> 
                 <br>
                 <br>
                 <p><?php echo($infos['info']); ?></p>
              </div>
              
            </div>
        </div>
        
        <div class = 'container'>
        <div class = "grey lighten-2">
        <a href="viewprof.php?id=<?php echo($view) ?>"> Ver como visitante </a>
        <br>
        <a href="altpic.php"> Alterar Avatar </a>
        <br>
        <a href="altdesc.php"> Editar Descrição </a>
        <br>
        <a href="logout.php"> Log Out </a>
        </div>
        </div>
        <?php include "includes/footer.inc"; ?>
    </body>


</html>
