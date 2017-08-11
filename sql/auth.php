<?php

session_start();

include "connect.php";

$usr = $_POST["cpf"];
$pass = $_POST["pass"];

$query = "select * from usuario where cpf='$usr' and senha='$pass'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);

if($count == 1){
  //Usuario cadastrado, inicia session -> redireciona para a home
  while($row = $result->fetch_assoc()){
    $_SESSION["usuario_nome"] = $row["nome"];
    $_SESSION["usuario_acesso"] = $row["tipo"];
    $_SESSION["usuario_cpf"] = $row["cpf"];
  }

  $result->close();
  header("Location: ../index.php");
}else{
  echo "<div class = 'erro-msg'>Usuário não cadastrado!</div>";
}


 ?>
