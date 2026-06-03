<?php
include('conecta_pdo.php');
// 1. Definir e executar a instrução SQL SELECT
$sql = "SELECT * from tb_cliente";
$stmt = $pdo->query($sql);

// 2. Buscar todos os resultados de uma vez em um array associativo
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 3. Verificar se retornou registros e percorrer
if (count($resultados) > 0) {
?>
    <ul>
        <?php
        foreach ($resultados as $linha) {
            echo    "<li>   ID: " . $linha["cd_cliente"] .
                " - Nome: " . $linha["nm_cliente"] .
                " - Telefone: " . $linha["ds_telefone"] .
                " - Email: " . $linha["ds_email"] .
                "</li>";
        }
        ?>
    </ul>
<?php
} else {
    echo "Nenhum resultado encontrado.";
}

$stmt = $pdo->query($sql);

if (count($resultados) > 0) {
?>
    <ol>
        <?php
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

            echo "<li> ID: $linha->cd_cliente - Nome: $linha->nm_cliente - Telefone: $linha->ds_telefone - Email: $linha->ds_email </li>";
        }
        ?>
    </ol>
<?php
}

/*

ESTRUTURA BASICA
1 - Cria uma string com select
2 - Executa essa string e armazena o resultset dela
3 - Converto em um dos dois posssiveis elementos
4.1 - Array
4.1.1 - Verifico se o array tem linhas
4.1.2 - Percorro o array exibindo as linhas enquanto tiver linhas
4.1.3 - Exibo as linhas do array
4.2 - objeto
4.2.1 - Verifico se o resultset tem linhas
4.2.2 - Percorro o resultset convertendo cada linha em objeto enquanto tiver linhas
4.2.3 - exibo os objetos
6 - fecha a conexão

*/