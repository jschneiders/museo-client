<?php

session_start();

$pesq = "";
if(isset($_GET['pesquisa'])){
  $pesq = $_GET["pesquisa"];

  $_SESSION["pesquisa_atual"] = $pesq;
}

header("Location: ../index.php?op=busca");


 ?>
