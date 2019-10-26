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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="produto.php">Produto</a></li>
                        <li class="active"><a href="anunciar.php">Anunciar</a></li>
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
    <div class="page-header">
        <h1>Anunciar o produto</h1>
    </div> 
    <?php
    if(!$_SESSION['usuarioNome']){
    ?> <h4> Para anunciar um veículo, você precisa estar logado! </h4><br>
        <h3><a href="login.php"> Clique aqui e faça seu login. </a></h3>
    <?php }else {
    ?>    
        <div container="text-center">
            <form class="form-horizontal navbar-center" action="./banco/inserir_veiculo.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label>Marca:</label>
                        <input required name="marca" type="text" class="form-control" id="marca">
                    </div>
                    <div class="col-md-6">
                        <label>Modelo:</label>
                        <input required name="modelo" type="text" class="form-control" id="modelo">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Ano:</label>
                        <input required name="ano" type="number" class="form-control" id="ano">
                    </div>

                    <div class="col-md-6">
                        <label>Quilometragem:</label>
                        <input required name="quilometragem" type="number" class="form-control" id="quilometragem">
                        </div>
                    </div>
        
                <div class="row">
                    <div class="col-md-6">
                        <label>Estado:</label>
                        <input required name="estado" type="text" class="form-control" id="estado">
                    </div>
                    <div class="col-md-6">                        
                        <label>Cidade:</label>
                        <input required name="cidade" type="text" class="form-control" id="cidade">
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Imagem do carro:</label>
                        <input type="file" required name="foto" accept="image/*">
                    </div>

                    <div class="col-md-6">   
                        <label>Valor:</label>
                        <input required name="valor" type="number" class="form-control" id="valor">
                    </div>
                </div>

                <label>Descrição:</label>
                <textarea required name="descricao" class="form-control" rows="5" id="descricao"></textarea><br>
            
                <button type="submit" class="btn btn-info">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
                
            </form>
        </div>
        <?php
    }
    ?>
   <div class="footer">
                <small class="nav-footer-copyright">
                Copyright© 2019 - Dream Cars 
                </small>
        </div>
            </body>
    </div>
</html>