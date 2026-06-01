<?php
session_start();
include('conecta_mysqli_oo.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];


$query = "INSERT INTO tb_cliente VALUES (NULL, '" . $nome . "', '" . $telefone . "', '" . $email . "')";

if ($mysqli->query($query)) {
    $_SESSION['insert'] = "registro inserido com sucesso";
} else {
    $_SESSION['insert'] = "erro na inserção";
};
header('location:insert.php');
