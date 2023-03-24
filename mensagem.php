<?php 
session_start();
if(isset($_SESSION["mensagem"])):


?>

<h1><?=$_SESSION["mensagem"]?></h1>

<?php
unset($_SESSION["mensagem"]);
endif;

?>