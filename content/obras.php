<?php

$content = '<div class="container obras">
                <div class="col-md-8 col-md-offset-2 text-center" >

                    <h1>' . $museu_name .'</h1>
                    <h4>Navegue pelas obras<h4>


                    <form class="obras pesquisar">
                        <div class="form-group">
                            <input type="text" class="form-control " placeholder="autor ou nome da obra">
                            <button type="submit" class="btn btn-default ">pesquisar</button>
                        </div>
                    </form>

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Resultado da busca</div>

                        <!-- Table -->
                        <table class="table">
                            <tr>
                                <td><a href="#" >Nome da obra</a></td>
                                <td>Autores</td>
                                <td>ano</td>
                            </tr>
                            <tr>
                                <td><a href="#" >Nome da obra</a></td>
                                <td>autores</td>
                                <td>ano</td>
                            </tr>
                            <tr>
                                <td><a href="#" >Nome da obra</a></td>
                                <td>autores</td>
                                <td>ano</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>';

return $content;

?>
