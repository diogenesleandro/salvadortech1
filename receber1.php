<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        date_default_timezone_set('America/Sao_Paulo');
        //$_GET $_POST
        //$_GET é uma supervariavel que recebe informações do formulário via get
        //$_POST é uma supervariavel que recebe informações do formulário via post

        echo "Nome: " . $_POST['nome'] . " " . $_POST['sobrenome'] . "<br> Altura: " . $_POST['altura'] / 100;
        echo "m";
        $dataSelecionada = $_POST["nascimento"];
        echo "<br>Data Original: " . $dataSelecionada;
        $date = new DateTime($dataSelecionada);
        $date2 = new DateTime();
        $idade = $date->diff($date2);
        echo "<br>Idade: " . $idade->format('%Y Anos');
        $date->modify('30 minutes');
        $dataBrasileira = $date->format('d/m/y h:i:s');
        echo "<br>Data de Nascimento: " . $dataBrasileira;
        if ($_POST['sexo'] != "definir" && isset($_POST['horario']) && isset($_POST['area']) && !empty($_FILES['arquivo']['name'])) {
            echo "<br> Sexo: <br>" . $_POST['sexo'] . "<br>";
            echo "Horario disponivel: <br> " . $_POST['horario'] . "<br>";
            echo "Areas de Interesse";
        ?>
    <ul>
        <?php
            foreach ($_POST['area'] as $indice => $valor) {
                echo "<li> $valor </li>";
            }
        ?>
    </ul>
    <?php
            $diretorio_destino = "uploads/"; // Pasta onde o arquivo será salvo
            $arquivo = $_FILES['arquivo'];
            $caminho = $diretorio_destino . $arquivo['name'];
            // Move o arquivo da pasta temporária para o destino final
            if (move_uploaded_file($arquivo['tmp_name'], $caminho)) {
    ?>
        <img src="<?php echo $caminho; ?>" alt="">
<?php
            } else {
                echo "Erro ao enviar o arquivo.";
            }
        } else {
            header('location:aula03.php');
        }


?>
</p>

<a href="aula03.php">Voltar</a>
</body>

</html>