<?php

$host ="localhost";
$nameserver= "root";
$password= "";
$database = "bd_relatorio";

$conn= mysqli_connect("$host","$nameserver","$password","$database");


if (!$conn){

die ("conexao mal sucedida" . mysqli_connect_error());

}

echo  "conexao sucedida";


?>
