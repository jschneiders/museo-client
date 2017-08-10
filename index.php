<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no"/>
		<meta name="MobileOptimized" content="320">
		<meta name="HandheldFriendly" content="True">

		<meta name="description" content="Cliente do sistema de museus Museo!">

        <title>Museo</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
	</head>
	<body>

        <?php
				session_start();

				if(isset($_GET['op'])){
					if($_GET['op'] == ''){
							$content = include './content/home.php';
					}else{
							$content = include './content/'.$_GET['op'].'.php';
					}
				}else{
					$content = include './content/home.php';
				}


        ?>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Museo</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Museu atual(escrever nome do museu) <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Outros museus <span class="caret"></span></a>
                    <ul class="dropdown-menu">

											<!-- AQUI VAI LISTAR OS MUSEUS NO MENU SUPERIOR -->
											<?php
													include "./sql/lista_museus.php";
													$li = listaTodosMuseus();
													echo $li;
											 ?>
											 <!-- FIM DA LISTAGEM DE MUSEUS -->
                    </ul>
                    </li>

										<!-- VERIFICA SE O USUARIO ESTA LOGADO PRA GERAR BOTAO LOGIN OU SAIR -->
										<?php
												$op = "login";
												if(isset($_SESSION["usuario_nome"]))
												{
													$op = "logoff";
													echo "<li><a href = 'index.php?op=$op'>Sair</a></li>";
												}else{
													echo "<li><a href = 'index.php?op=$op'>Login</a></li>";
												}
										 ?>
										 <!-- FIM -->
                </ul>



                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>


            <?php echo $content; ?>



    <script src="js/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/util.js"></script>
		</script>
	</body>
</html>
