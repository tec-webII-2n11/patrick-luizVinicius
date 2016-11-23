<!DOCTYPE html>
<?php

    $usu = $_POST['name'];
    $uID = $_POST['uID'];
    $titulo = strip_tags($_POST['titulo']);
    $pic = $_FILES['pic'];
    $max = $_POST['MAX'];
    
    $tipos_validos = array("image/x-png", "image/png", "image/jpeg","image/gif");
     
    $erro = 0;
    
    if(empty($titulo)){
        $erro = 1;
        $mensagem = 'Insira um Titulo na sua postagem!';
    }
    
    if($pic['size'] > $max){
        $erro = 1;
        $mensagem = 'Arquivo muito pesado!';
    }
    
    if(array_search($pic['type'],$tipos_validos)===FALSE) {
        $erro = 1;
        $mensagem = 'Formato invalido. <br> Tente usar PNG, JPEG ou GIF.';
        
    }
    
    
    if($erro == 0){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $rand = substr(str_shuffle($chars), 0, 5);
        
        if (!file_exists('img/post/'.$usu.'/'.$rand)) {
            mkdir('img/post/'.$usu.'/'.$rand, 0777, true);
        }
        
        $destino = 'img/post/'.$usu.'/'.$rand.'/'.$pic['name'];
        $filename = $pic['tmp_name'];
        
        move_uploaded_file($filename,$destino);  
          
        include "sqlconecta.php";
    
        $add = "INSERT into post(uID, user, titulo, pic) VALUES('".$uID."','".$usu."','".$titulo."','".$destino."')";
        mysqli_query($conexao,$add) or die("Erro no banco de dados: ".mysqli_error());
       
        mysqli_close($conexao);

        header("Location: catline.php");
        
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