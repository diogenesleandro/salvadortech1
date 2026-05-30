<?php

include('config_db.php');

try {
    // 1. Conexão com o banco de dados
    $mysqli = new mysqli($endereco, $usuario, $senha, $banco);
} catch (mysqli_sql_exception $e) {
    // Tratamento do erro
    echo $e->getMessage();
    // Em produção, você também pode logar o erro: error_log($e->getMessage());
}
