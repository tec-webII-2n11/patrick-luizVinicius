<!DOCTYPE html>
<?php

    $usu = $_POST['name'];
    $pic = $_FILES['avatar'];
    $max = $_POST['MAX'];
    
    $tipos_validos = array("image/x-png", "image/png", "image/jpeg","image/gif");
     
    $erro = 0;
    
    if($pic['size'] > $max){
        $erro = 1;
        $mensagem = 'Arquivo muito pesado!';
    }
    
    if(array_search($pic['type'],$tipos_validos)===FALSE) {
        $erro = 1;
        $mensagem = 'Formato invalido. <br> Tente usar PNG, JPEG ou GIF.';
        
    }
    
    
    if($erro == 0){
        if (!file_exists('img/users/'.$usu)) {
            mkdir('img/users/'.$usu, 0777, true);
        }
        
        $destino = 'img/users/'.$usu.'/'.$pic['name'];
        $filename = $pic['tmp_name'];
        
        move_uploaded_file($filename,$destino);  
          
        include "sqlconecta.php";
    
        $ava = "UPDATE user SET prof='".$destino."' WHERE username='".$usu."'";
        mysqli_query($conexao,$ava) or die("Erro: ".mysqli_error());
        mysqli_close($conexao);

        header("Location: conta.php");
        
    }
        
    
?>

<html>
    <head>
        <title> CatBag - Avatar! </title>
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