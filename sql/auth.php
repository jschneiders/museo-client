<?php

include "connect.php";

$usr = $_POST["cpf"];
$pass = $_POST["pass"];

$query = "select * from usuario where cpf='$usr' and senha='$pass'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);

if($count == 1)
{
  print "Usuario autenticado, adios.";
}else{
  print "Erro";
}


 ?>
