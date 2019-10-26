<?php
    include_once("conexao.php");
    session_start();

    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $ano = filter_input(INPUT_POST, 'ano');
    $km = filter_input(INPUT_POST, 'quilometragem');
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, 'valor');
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $id_user = $_SESSION['usuarioId'];

    if(isset($_FILES['foto'])){
      $extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
      $foto = time() . $extensao; //define o nome do arquivo
      $diretorio = '../imagens_anuncios/'; //define o diretorio para onde enviaremos o arquivo
      move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$foto); //efetua o upload

  }

    $cadastrar = "INSERT INTO veiculo (
      id_user,
      ano,
      modelo,
      marca,
      valor,
      quilometragem,
      estado,
      cidade,
      foto,
      descricao
    ) 
      VALUES (
        $id_user,
        $ano,
        '$modelo',
        '$marca',
        $valor,
        $km,
        '$estado',
        '$cidade',
        '$foto',
        '$descricao'
      )";

    $result_cadastrar = mysqli_query($conn, $cadastrar);

    header('Location: ../produto.php');

?>