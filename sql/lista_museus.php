<?php



function listaTodosMuseus(){

  include "connect.php";

  $query = "select * from museu";
  $result = mysqli_query($connection, $query);
  $lista = "";
  while($row = $result->fetch_assoc())
  {
    $nome = str_replace("'", "\'", $row['nome']);
    $lista .= "<li><a href='#'>" . $nome . "</a></li>";
  }

  return $lista;

}


 ?>
