<?php
session_start();
include('conecta_mysqli_estruturado.php');

// Dados que você deseja inserir
$codigo = null;
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// 1. Prepara a query SQL com pontos de interrogação (?)
$query = "INSERT INTO tb_cliente VALUES (?, ?, ?, ?)";

// 2. Inicializa a declaração preparada
$stmt = mysqli_prepare($mysqli, $query);

// 3. Associa os parâmetros (bind_param)
// "sis" indica os tipos: s = string, i = inteiro, d = double, b = blob
mysqli_stmt_bind_param($stmt, "isss", $codigo, $nome, $telefone, $email);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['insert'] = "registro inserido com sucesso";
} else {
    $_SESSION['insert'] = "erro na inserção";
};
// 5. Fecha a declaração e a conexão
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
header('location:insert.php');
