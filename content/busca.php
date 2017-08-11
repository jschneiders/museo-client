<?php

include "../ElasticMuseo.php";

$current_query="";
if(isset($_SESSION["pesquisa_atual"])){
  $current_query = $_SESSION["pesquisa_atual"];
}


$es = new ElasticMuseo();
$es->getObras("titulo", $current_query, "", 0); 

$content = "buscando..." . $_SESSION["pesquisa_atual"];

return $content;



 ?>
