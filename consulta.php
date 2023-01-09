

<?php

include_once("./connBD.php");



$pesquisa = "select * FROM cadastro1";

$resultado = mysqli_query($conn,$pesquisa);

while($row_cadastro = mysqli_fetch_assoc($resultado)){


echo "ID"  . $row_cadastro["id"] . "</BR>";
echo "USUARIO"  . $row_cadastro["usuario"] . "</BR>";
echo "SENHA"  . $row_cadastro["senha"] . "</BR>". "</BR>";



}


















?>