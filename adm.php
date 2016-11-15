<!DOCTYPE html>

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
                <div class="row">
                  <div class="col s12">
                    <div class="card-panel grey lighten-3">
                      <span class="text">
                        <h5>ADM</h5>
                        
                        <form method="POST" action="adm2.php">
                            <label for="username">Username:</label>
                            <input id="username" name="username" type="text" size="25" required/>
                            
                            <label for="pass" required>Senha: </label>
                            <input type="password" id="pass" name="pass">
                            </br>
                            
                            <input class="waves-effect waves-light btn" type="submit" value="Entrar"/>
                        </form>
                    
                    </div>
                    </span>
                    </div>
                  </div>
                 </div>
         <?php include "includes/footer.inc"; ?>
    </body>
</html>