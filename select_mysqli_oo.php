<?php
//1. Incluir a conexão oo
include('conecta_mysqli_oo.php');

// 2. Definir a instrução SQL SELECT
$sql = "SELECT * FROM tb_cliente";

// 2. Executar a consulta
//  $resultado = mysqli_query($mysqli, $sql); -> estruturado
$resultado = $mysqli->query($sql); //oo
// 3. Verificar se retornou registros
//if (mysqli_num_rows($resultado) > 0) { ->estruturado
if ($resultado->num_rows > 0) { //oo
?>
    <h1>CONSULTA COM MYSQLI_FETCH_ASSOC</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Percorrer cada linha de resultado
            //while ($linha = mysqli_fetch_assoc($resultado)) { ->estruturado
            while ($linha = $resultado->fetch_assoc()) { //oo
                echo "<tr>"
                    . "<td> " . $linha["cd_cliente"] . "</td>"
                    . "<td> " . $linha["nm_cliente"] . "</td>"
                    . "<td> " . $linha["ds_telefone"] . "</td>"
                    . "<td> " . $linha["ds_email"] . "</td>"
                    . "</tr>";
            }

            ?>
        </tbody>
    </table>
<?php
} else {
    echo "Nenhum resultado encontrado.";
}

// 2. Executar a consulta
//$resultado = mysqli_query($mysqli, $sql); -> estruturado
$resultado = $mysqli->query($sql); //oo
//if (mysqli_num_rows($resultado) > 0) { ->estruturado
if ($resultado->num_rows > 0) { //oo
?>
    <h1>CONSULTA COM MYSQLI_FETCH_OBJECT</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Percorrer cada linha de resultado
            //while ($linha = mysqli_fetch_object($resultado)) {->estruturado
            while ($linha = $resultado->fetch_object()) { //oo
                echo    "<tr>
                    <td>  $linha->cd_cliente     </td>
                    <td>  $linha->nm_cliente     </td>
                    <td>  $linha->ds_telefone    </td>
                    <td>  $linha->ds_email       </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
<?php
}
// 5. Fechar a conexão
mysqli_close($mysqli);

/*

ESTRUTURA BASICA
1 - Cria uma string com select
2 - Executa essa string e armazena o resultset dela
3 - Verifica se esse resultset tem linhas (>0)
4 - Se tiver linhas percorre (while) convertendo cada linha em um dos dois posssiveis elementos
4.1 - Array
4.2 - objeto
5 - exibe essas linhas segundo regras do elemento escolhido 
5.1 - Array [""]
5.2 - Objeto ->
6 - fecha a conexão

*/