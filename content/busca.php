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
$results = $es->getObras("titulo", $current_query, "", "", 0);

//$content = "Buscando..." . $_SESSION["pesquisa_atual"] . "<br>";


$content = '<div class="container obras">
                <div class="col-md-8 col-md-offset-2 text-center" >

                    <h1>' . $museu_name .'</h1>
                    <h4>Navegue pelas obras<h4>


                    <form class="obras pesquisar" action="./sql/pesquisa_obras.php" action="post">
                        <div class="form-group">
                            <input type="text" class="form-control " placeholder="autor ou nome da obra">
                            <button type="submit" class="btn btn-default ">pesquisar</button>
                        </div>
                    </form>

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Resultado da busca</div>

                        <!-- Table -->
                        <table class="table">';
                        foreach($results as $result){
                          $content .= '<tr>
                                          <td><a href="index.php?op=obra&id='.$result['_id'].'" >'.$result['_source']['titulo'].'</a></td>
                                          <td>'.$result['_source']['autor'].'</td>
                                          <td>'.$result['_source']['museo'].'</td>
                                      </tr>';
                        }
                            
          $content .=' </table>
                    </div>
                </div>
            </div>';


return $content;

function parseJson($json){
  return "Exibindo resultado..." . json_encode($json);
}

 ?>
