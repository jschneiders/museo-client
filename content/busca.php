<?php

$_SESSION["museu_atual"] = -1;

include "./ElasticMuseo.php";

$current_query="";
if(isset($_SESSION["pesquisa_atual"])){
  $current_query = $_SESSION["pesquisa_atual"];
}

if($_SESSION["museu_atual"] == -1)
{
  $museu = "";
}else{
  $museu = $museu_name;
}
$es = new ElasticMuseo();
$es->getObras("titulo", $current_query, "", $museu, 0);

$content = "Buscando..." . $_SESSION["pesquisa_atual"] . "<br>";


$content .= parseJson($es);


return $content;

function parseJson($json){
  return "Exibindo resultado..." . json_encode($json);
}

 ?>
