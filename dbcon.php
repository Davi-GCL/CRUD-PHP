<?php

$conn = mysqli_connect("localhost","root","","fbtech_gbd");

//Caso a conexão não aconteca
if(!$conn){
    die ("erro na conexao".mysqli_connect_error());
}
?>
