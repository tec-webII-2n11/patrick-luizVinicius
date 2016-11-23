<html>
<body>
<?php

$conexao = mysqli_connect("127.0.0.1","root","","catbag");

if(mysqli_connect_errno())
{
    echo "Erro ao conectar: ".mysqli_connect_error();
}
?>
</body>
</html>