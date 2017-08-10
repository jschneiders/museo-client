<?php

session_start();

include "connect.php";

$usr = $_POST["cpf"];
$pass = $_POST["pass"];

$query = "select * from usuario where cpf='$usr' and senha='$pass'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);

if($count == 1)
{
  //Usuario cadastrado redireciona para a busca
  while($row = $result->fetch_assoc()){
    $_SESSION["usuario_nome"] = $row["nome"];
    $_SESSION["usuario_acesso"] = $row["tipo"];

    echo $row["nome"];
  }

  $result->close();
  header("Location: ../index.php");
}else{
  print "Erro";
}


 ?>
