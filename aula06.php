<p>Criando o indice usuario no cookie e atribuindo o valor João</p>

<?php

$nome = "usuario";
$valor = "João";
// Expira em 30 dias (30 dias * 24 horas * 60 minutos * 60 segundos)
$expiracao = time() + (30 * 24 * 60 * 60);

setcookie($nome, $valor, $expiracao, "/");
