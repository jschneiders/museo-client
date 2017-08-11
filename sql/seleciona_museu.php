<?php

session_start();

if(isset($_GET['id']))
{
  $_SESSION["museu_atual"] = $_GET['id'];
  echo $_SESSION["museu_atual"];
  header("Location: ../index.php");
}


 ?>
