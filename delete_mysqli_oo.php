<?php
include('conecta_mysqli_oo.php');

$id = $_POST['cd_cliente'];

if ($id) {

    // 2. Prepara a query com o placeholder "?" (Prepared Statement)
    $sql = "DELETE FROM tb_cliente WHERE cd_cliente = ?";
    //$stmt = mysqli_prepare($mysqli, $sql);
    $stmt = $mysqli->prepare($sql);
    if ($stmt) {
        // 3. Vincula o parâmetro (o "i" indica que o ID é um número Inteiro)
        //mysqli_stmt_bind_param($stmt, "i", $id);
        $stmt->bind_param("i", $id);
        // 4. Executa a query
        //if (!mysqli_stmt_execute($stmt)) {
        if (!$stmt->execute()) {
            // Se falhar a execução, exibe ou salva o erro
            //die("Erro ao deletar: " . mysqli_stmt_error($stmt));
            die("Erro ao deletar: " . $stmt->error);
        }
        // 5. Fecha o statement
        //mysqli_stmt_close($stmt);
        $stmt->close();
    } else {
        //die("Erro ao preparar a consulta: " . mysqli_error($mysqli));
        die("Erro ao preparar a consulta: " . $mysqli->error);
    }
    // 6. Fecha a conexão com o banco
    //mysqli_close($mysqli);
    $mysqli->close();
    header('location:select_mysqli_oo.php');
}
