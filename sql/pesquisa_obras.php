<?php



include "connect.php";
include "../ElasticMuseo.php";

$pesq = "";
if(isset($_GET['pesquisa'])){
  $pesq = $_GET["pesquisa"];
}



echo "Buscando...$pesq";


 ?>
