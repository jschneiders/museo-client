<?php

$content = '<div class="container">
                <div class="col-md-8 col-md-offset-2 text-center" >
                    <h1>' . $museu_name . '</h1>
                    <h4>Pesquise por obras</h4>
                    <form class="home pesquisar" action="./sql/pesquisa_obras.php" action="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="autor ou nome da obra" name="pesquisa">
                        </div>
                        <button type="submit" class="btn btn-default">pesquisar</button>
                    </form>
                </div>
            </div>';

return $content;

?>
