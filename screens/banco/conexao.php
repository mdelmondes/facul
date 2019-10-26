<?php
    $servername = "localhost";
    $database = "carros_pi";
    $username = "root";
    $password = "123456";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
    
?>