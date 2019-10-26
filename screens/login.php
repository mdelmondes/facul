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
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #fff;
   color: #000;
   text-align: center;
}
</style>

    <title>Carros Antigos</title>  
      </head>
    <!-- MENU -->

    <div class="container-fluid">
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="produto.php">Produto</a></li>                        
                        <li><a href="anunciar.php">Anunciar</a></li>
                        <li><a href="sobre-nos.php">Sobre nós</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                   
                        <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="cadastrar.php">Cadastre-se</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
    
    <!-- CORPO DO SITE -->
      <body>
      <div class="container-fluid">
      <div class="page-header">
        <h1>Login</h1>
    </div>  
          
          <div container="text-center">
         
          <form class="form-horizontal navbar-center" action="./banco/login_session.php" method="post">
          <div class="form-group">
            <label class="control-label col-sm-2" for="login">Login:</label>
              <div class="col-sm-5">
                  <input name="email" type="email" class="form-control" id="email" placeholder="E-mail">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="senha">Senha:</label>
                <div class="col-sm-5"> 
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha">
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox">Lembrar</label>
                    </div>
                </div>
          </div>
              
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Entrar</button>
                <a href="cadastrar.php" class="btn btn-success">Cadastrar</a>
            </div>
          </div>
        </form>
        <p style="color: red">
            <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
        
          </div>
     
          <div class="footer">
                <small class="nav-footer-copyright">
                Copyright© 2019 - Dream Cars 
                </small>
            </div>
        </div>
        </body>
        </div>
</html>