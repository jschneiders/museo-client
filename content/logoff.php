<?php
session_start();

//Pode fazer alguma coisa aqui, por enquanto só sai do sistema
//e redireciona pra home

session_destroy();
header("Location: ./index.php");

 ?>
