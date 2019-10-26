<?php
session_start();
include_once("./banco/conexao.php");
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
    <link href="css/produto.css" rel="stylesheet" type="text/css">

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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="produto.php">Produto</a></li>
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
    <div class="page-header">
        <h1>Produtos</h1>
    </div>      
                
        <div class="container text-center">    
            <h3>Ache o seu sonho</h3><br>
            <?php

                $listar = "SELECT u.nome_completo, v.modelo, v.marca, v.valor, v.foto, v.descricao, v.id as veiculo_id, v.id_user, u.id as us_id
                FROM Usuario as u
                INNER JOIN veiculo as v on v.id_user = u.id";

                $res_lista = mysqli_query($conn, $listar);
              

                while($row_usuario = mysqli_fetch_assoc($res_lista)){                    
                    echo '
                    <div class="alert alert-success" role="alert" align="left">
                        <img src="imagens_anuncios/' . $row_usuario['foto'] . '" class="img img-responsive img-thumbnail" width="200">
                        <div style="position: absolute; top: 255px;">
                        <p style="
                        padding-left: 210px;
                        position: relative;
                        color: #000;"
                        ><b> Anunciante:</b> ' . $row_usuario['nome_completo'] . ' </p>
                        <p style="
                        padding-left: 210px;
                        position: relative;
                        color: #000;"
                        ><b> Modelo:</b> ' . $row_usuario['modelo'] . ' </p>
                        <p style="
                        padding-left: 210px;
                        position: relative;
                        color: #000;"
                        ><b> Marca:</b> ' . $row_usuario['marca'] . ' </p>
                        <p style="
                        padding-left: 210px;
                        position: relative;
                        color: #000;"
                        ><b> Valor:</b> R$ ' . $row_usuario['valor'] . ' </p>
                        <p style="
                        padding-left: 210px;
                        position: relative;
                        color: #000;"
                        ><b> Descrição:</b> ' . $row_usuario['descricao'] . ' </p>                           
                        </div>' ?>
                        <?php
                            if($_SESSION['usuarioId'] === $row_usuario['us_id']){
                        ?>   
                        <a href="excluir.php?id=<?php echo $row_usuario['veiculo_id'] ?>"  class="btn btn-danger" style="
                            position: absolute;
                            right: 10%;
                        ">Excluir anuncio</a>
                        <?php       
                            }
                        '
                        
                        
                    </div><br>'
                    ; 
                }
            ?>
            </div>
            <div class="footer">
                <small class="nav-footer-copyright">
                Copyright© 2019 - Dream Cars 
                </small>
            </div>
    
    </div>
    </body>
</html>