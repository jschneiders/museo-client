<?php



function listaTodosMuseus(){

  include "connect.php";

  $query = "select * from museu";
  $result = mysqli_query($connection, $query);
  $lista = "<li><a href='./sql/seleciona_museu.php?id=-1'>Todos</a></li>";
  while($row = $result->fetch_assoc())
  {
    $nome = str_replace("'", "\'", $row['nome']);

    // Link do museu é gerado utitlizando o id dele no banco de dados
    // esse id pode ser usado para facilitar o contexto da busca depois por exemplo
    $lista .= "<li><a href='./sql/seleciona_museu.php?id=" . $row['id'] ."'>" . $nome . "</a></li>";
  }

  return $lista;

}

function getMuseuName($mid){

  include "connect.php";

  $query = "select * from museu where id='$mid'";
  $result = mysqli_query($connection, $query);
  $nome = "";
  while($row = $result->fetch_assoc())
  {
    $nome = str_replace("'", "\'", $row['nome']);
  }

  return $nome;

}


 ?>
