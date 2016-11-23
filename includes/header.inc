

<header>
    <div class="container">
    <img src="img/Logo_small.png" alt="Banner" title="CatBag - Melhorando o seu dia!">
    </div>
    
     <nav>
    <div class="nav-wrapper brown darken-4">
    <div class="container">
    <div class=row>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php">HOME</a></li>
        <li><a href="catline.php">CATLINE</a></li>
       
       <?php if(isset($_COOKIE['usuario'])){
        
        echo('<li><a href="conta.php">CONTA</a></li>');
        }
        else{echo('<li><a href="entrar.php">CONTA</a></li>');}
        ?>
        <li>
            <form action="http://google.com/search">
                <input type="search" name="q" placeholder="Pesquisar...">
                
            </form></li>
        <li>
        
            <div class = offset-s6 >
                <?php if(isset($_COOKIE['usuario'])){
        
                 echo('<a href="newpost.php" class="orange darken-4 waves-effect waves-light btn">Meow!</a>');
                 }
                 else{echo('<a href="entrar.php" class="orange darken-4 waves-effect waves-light btn">Meow!</a>');}
                 ?>
            <div>
        
        </li>
      </ul>
      </div>
      </div>
    </div>
  </nav>

</header>

