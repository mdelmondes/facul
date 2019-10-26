<?php
    session_start();      
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="texy/html;" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=">
    <meta name="description" content="">
    <meta name="viewport" content="width=divice-width, initial-scale='">
    <link href="css/home.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      
    <!-- ESTILGOS PARA PÁGINA -->
    <link rel="stylesheet" href="https://fonts.googlepis.com/icon?family=Material+Icons">
    
      
    <!-- JavaScript e Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Carros Antigos</title>
    </head>
    <div class="container-fluid">
       <!-- MENU -->
        <header>
            <nav class="navbar navbar-light bg-light" style="border: 1px;
                                                        border-style: solid;
                                                        border-radius: 10px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                   <a class="navbar-brand" href="index.php"><img src="./imagens/logo.jpeg" height="60"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="produto.php">Produto</a></li>
                        <li><a href="anunciar.php">Anunciar</a></li>
                        <li><a href="sobre-nos.php">Sobre nós</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(!$_SESSION['usuarioNome']){
                    ?>                    
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="cadastrar.php">Cadastre-se</a></li>
                    <?php
                        } else {
                    ?> <li><h4 style="color: #000;">Olá, <?php echo $_SESSION['usuarioNome'];?></h4></li>
                    <li><a href="sair.php">Sair</a><li>
                    <?php       
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 1025px;
    margin-left: 13%;">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- IMAGENS COM CARROUSEL -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="./imagens/index_01.jpeg" alt="Mercedez">
                    
                </div>

                <div class="item">
                    <img src="./imagens/index_02.jpeg" alt="Cadillac">
                    
                </div>
            </div>

            <!-- BOTAO DE CONTROLE -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Antes</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Depois</span>
            </a>
        </div>
        
        <!-- CONTEUDO -->
        <div class="container text-center">    
                       
            <div class="container text-center">
                <h3 id="sobrenos">Sobre nós</h3><br>
                <p>
                Somos um grupo de 6 estudantes de tecnologia, cursando o 4o semestre de Sistemas da Informação. Além de todos nós sermos apaixonados por carros antigos, queríamos unir nossa profissão aos gostos de cada um. Em nossa proposta, temos pelos menos um carro que é a paixão de cada e por isso, colocamos o nosso melhor neste site para mostrarmos a todos a nossa capacidade, dedicação, aprendizado e muita superação.
                </p>
            </div>
        </div>
        
        <div class="container text-center">
            <h3 id="contato">Entre em Contato</h3>
            <div class="form-group">
                <label for="nome">Name:</label>
                <input type="text" class="form-control" id="nome">
            </div>
            <div class="form-group">
                <label for="emial">Email:</label>
                <input type="password" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="comment">Mensagem:</label>
                <textarea class="form-control" rows="5" id="mensagem"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
        
        <footer class="container-fluid text-center">
            <small class="nav-footer-copyright">
             Copyright© 2019 - Dream Cars 
            </small>
        </footer>
    </body>
    </div>
</html>