<?php

include('conecta_mysqli_estruturado.php');

$nome = "Teste";
$telefone = "(00)00000-0000";
$email = "teste@teste.com";


$query = "INSERT INTO tb_cliente VALUES (NULL, '" . $nome . "', '" . $telefone . "', '" . $email . "')";

if (mysqli_query($mysqli, $query)) {
    echo "registro inserido com sucesso";
} else {
    echo "erro na inserção";
};
