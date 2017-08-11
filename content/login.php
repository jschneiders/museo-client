<?php

$content = '<div class="container">
                <div class="col-md-8 col-md-offset-2 text-center" >
                    <h1>' . $museu_name .'</h1>
                    <h4>Fazendo login é possível ter acesso as informações de pesquisador das obras. </h4>
                    <form class="home pesquisar" action="./sql/auth.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control cpf-input" placeholder="CPF" name="cpf" maxlength="14">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha" name="pass">
                        </div>
                        <button type="submit" class="btn btn-default">login</button>
                    </form>
                    <h4>Não possui login? Envie um email para email@museo.com e solicite seu cadastro de pesquisador! </h4>
                </div>
            </div>';

            if(isset($_SESSION["usuario_nome"])){
              header("Location: ./index.php");
            }

return $content;



?>
