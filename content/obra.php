<?php


if(isset($_GET["id"])){
    $es = new ElasticMuseo();
    $result = $es->getObras($_GET["id"], "", "", "", 0);
}else{
    header("Location: ./index.php");
}


$content = '<div class="container obra">
                <div class="col-md-8 col-md-offset-2 " >
                    <a class="btn btn-default button-space" href="#" role="button">voltar</a>
                    <div class="">
                        <img src="'.$result['_source']['caminhoImagem'].'" class="img-responsive" alt="nome da obra"/>
                    </div>
                    <div class="">
                        <h3><b>Título: </b>'.$result['_source']['titulo'].'</h3>
                        <h5><b>Autor(es): </b>'.$result['_source']['autor'].'</h5>
                        <p><b>Descrição: </b>'.$result['_source']['descricao'].'</p>';


                if(isset($_SESSION["usuario_nome"])){
                    $content .= '<!-- informações para quem estiver logado-->
                        <h5><b>Data de publicação: </b>'.$result['_source']['dataPublicacao'].'</h5>
                        <h5><b>País de origem: </b>'.$result['_source']['paisOrigem'].'</h5>
                        <h5><b>Museu: </b>'.$result['_source']['museu'].'</h5>
                        <h5><b>Coleção: </b>'.$result['_source']['colecao'].'</h5>
                        <h5><b>Estilo: </b>'.$result['_source']['estilo'].'</h5>';
                }
                        
            $content .= '</div>
                    <a class="btn btn-default button-space" href="#" role="button">voltar</a>
                </div>
            </div>';

return $content;

?>