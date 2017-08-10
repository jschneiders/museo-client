<?php



function listaTodosMuseus(){

  include "connect.php";

  $query = "select * from museu";
  $result = mysqli_query($connection, $query);
  $lista = "";
  while($row = $result->fetch_assoc())
  {
    $nome = str_replace("'", "\'", $row['nome']);

    // Link do museu é gerado utitlizando o id dele no banco de dados
    // esse id pode ser usado para facilitar o contexto da busca depois por exemplo
    $lista .= "<li><a href='index.php?op=museu?id=" . $row['id'] ."'>" . $nome . "</a></li>";
  }

  return $lista;

}


 ?>
