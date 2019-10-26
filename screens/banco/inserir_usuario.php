<?php
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $senha = md5($senha);

    $fullname = $nome . " " . $sobrenome;

    $cadastrar = "INSERT INTO Usuario (
      nome,
      sobrenome,
      nome_completo,
      cpf,
      telefone,
      endereco,
      numero,
      estado,
      cidade,
      bairro,
      cep,
      email,
      senha) 
      VALUES (
      '$nome',
      '$sobrenome',
      '$fullname',
      $cpf,
      $telefone,
      '$endereco',
      $numero,
      '$estado',
      '$cidade',
      '$bairro',
      $cep,
      '$email',
      '$senha'
      )";

    $result_cadastrar = mysqli_query($conn, $cadastrar);

    header('Location: ../login.php');

?>