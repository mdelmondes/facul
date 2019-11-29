<?php
    session_start();
    include_once("./banco/conexao.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $apagar = "DELETE FROM veiculo WHERE id='$id'";
    $res_apagar = mysqli_query($conn, $apagar);

    header("Location: produto.php");
?>