<?php
session_start();
include('conecta_pdo.php');
$codigo = null;
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// Query com marcadores
$query = "INSERT INTO tb_cliente VALUES (:codigo, :nome, :telefone, :email)";
$stmt = $pdo->prepare($query);

if ($stmt->execute(
    [
        ':codigo' => $codigo,
        ':nome'  => $nome,
        ':telefone' => $telefone,
        ':email' => $email
    ]
)) {
    $_SESSION['insert'] = "registro inserido com sucesso";
} else {
    $_SESSION['insert'] = "erro na inserção";
};
header('location:insert.php');
