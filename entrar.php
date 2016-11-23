<!DOCTYPE html>

<html>
    <head>
        <title> CatBag - Entrar</title>
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
                        <h5>Log In</h5>
                        
                        <form method="POST" action="login.php">
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
                
    
            <div>
                <h5>Não esta cadastrado ainda?</h5>
                <form action="cadastrar.php" method="POST">
                    
                    <p>
                    <label for="nome">Nome Completo:</label>
                    <input id="nome" name="nome" type="text" size="40" required/>
                    <br/>
                    
                    <label for="email">E-Mail:</label>
                    <input id="email" name="email" type="email" size="40" required/>
                    <br/>
                    
                    <label for="confirmarEmail">Confirmar E-Mail:</label>
                    <input id="confirmarEmail" name="confirmarEmail" type="email" size="40" required/>
                    <br/>
                    
                    <label for="nome">Username:</label>
                    <input id="username" name="username" type="text" size="25" required/>
                    <br/>
                    
                    <label for="pass" required>Senha: </label>
                    <input type="password" id="pass" name="pass">
                    </br>
                    
                    <label for="confPass" required>Confirmar Senha: </label>
                    <input type="password" id="confPass" name="confPass">
                    </br>
                    
                    <input type="checkbox" name="termos" id="termos" required>
                    <label for="termos">Li e concordo com o <a href="termos.php">regulamento</a></label>
                    </br>
                    <br>
                    
                    <input class="waves-effect waves-light btn" type="submit" value="Cadastrar"/>
                </form>
        
            </div>
        </div>
        
        
        <?php include "includes/footer.inc"; ?>
    </body>


</html>
