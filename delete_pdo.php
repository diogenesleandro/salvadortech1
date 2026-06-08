<?php
include('conecta_pdo.php');
// NOTA PROFESSOR: No arquivo de conexão, garanta que a variável se chama $pdo
// e foi instanciada assim: $pdo = new PDO("mysql:host=...", "usuario", "senha");
// Também garanta que o PDO está configurado para disparar exceções:
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['cd_cliente'];

if ($id) {
    try {
        // 2. Prepara a query usando o método 'prepare' do objeto $pdo
        // O PDO aceita o "?" como placeholder (parâmetro posicional) igual ao MySQLi
        $sql = "DELETE FROM tb_cliente WHERE cd_cliente = ?";
        $stmt = $pdo->prepare($sql);

        // 3 e 4. No PDO, podemos vincular e executar tudo na mesma linha!
        // Passamos os parâmetros dentro de um array no método 'execute'
        $stmt->execute([$id]);

        header('location:select_pdo.php');
        exit; // Boa prática após redirecionamentos

    } catch (PDOException $e) {
        // Se qualquer coisa der errado no banco, o PDO joga o erro direto para cá
        die("Erro ao deletar: " . $e->getMessage());
    }
}
