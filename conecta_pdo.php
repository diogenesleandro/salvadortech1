<?php
include('config_db.php');

$pdo = new PDO("mysql:host=$endereco;dbname=$banco;port=$porta", $usuario, $senha);
