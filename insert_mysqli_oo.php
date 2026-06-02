<?php
session_start();
include('conecta_mysqli_oo.php');
$codigo = null;
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// 1. Definir o comando SQL com '?' para os parâmetros que serão inseridos
$query = "INSERT INTO tb_cliente VALUES (?, ?, ?, ?)";

// 2. Preparar a query
$stmt = $mysqli->prepare($query);

// 3. Vincular os parâmetros (s = string, i = inteiro) e definir os valores
$stmt->bind_param("isss", $codigo, $nome, $telefone, $email);

if ($stmt->execute()) {
    $_SESSION['insert'] = "registro inserido com sucesso";
    // 6. Fechar o statement
    $stmt->close();
} else {
    $_SESSION['insert'] = "erro na inserção" . $mysqli->error;
};
// 7. Fechar a conexão
$mysqli->close();
header('location:insert.php');
