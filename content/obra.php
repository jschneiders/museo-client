<?php

include "./ElasticMuseo.php";

if(isset($_GET["id"])){
    $es = new ElasticMuseo();
    $result = json_decode($es->getObras("_id", $_GET["id"], "", "", 0))[0]->_source;
}else{
    header("Location: ./index.php");
}

foreach($result->autor as $key => $autor){
                          $autores .= $autor;
                        }

$content = '<div class="container obra">
                <div class="col-md-8 col-md-offset-2 " >
                    <a class="btn btn-default button-space" href="#" role="button" onClick="voltarPagina()">voltar</a>
                    <div class="">
                        <img src="'.$result->caminhoImagem.'" class="img-responsive" alt="nome da obra"/>
                    </div>
                    <div class="">
                        <h3><b>Título: </b>'.$resulttitulo.'</h3>
                        <h5><b>Autor(es): </b>'.$autor.'</h5>
                        <p><b>Descrição: </b>'.$result->descricao.'</p>';




                if(isset($_SESSION["usuario_nome"])){
                    $content .= '<!-- informações para quem estiver logado-->
                        <h5><b>Data de publicação: </b>'.$result->dataPublicacao.'</h5>
                        <h5><b>País de origem: </b>'.$result->paisOrigem.'</h5>
                        <h5><b>Museu: </b>'.$result->museu.'</h5>
                        <h5><b>Coleção: </b>'.$result->colecao.'</h5>
                        <h5><b>Estilo: </b>'.$result->estilo.'</h5>';
                }
                        
            $content .= '</div>
                    <a class="btn btn-default button-space" href="#" role="button" onClick="voltarPagina()">voltar</a>
                </div>
            </div>';

return $content;

?>