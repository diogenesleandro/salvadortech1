<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Importando o Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4 antialiased">

    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 w-full max-w-md flex flex-col items-center">

        <h2 class="text-2xl font-bold text-slate-800 mb-6 text-center w-full border-b border-slate-100 pb-4">
            Perfil do Candidato
        </h2>

        <div class="w-full text-slate-700 space-y-4">
            <?php
            date_default_timezone_set('America/Sao_Paulo');
            //$_GET $_POST
            //$_GET é uma supervariavel que recebe informações do formulário via get
            //$_POST é uma supervariavel que recebe informações do formulário via post
            $diretorio_destino = "uploads/"; // Pasta onde o arquivo será salvo
            $arquivo = $_FILES['arquivo'];
            $caminho = $diretorio_destino . $arquivo['name'];
            // Move o arquivo da pasta temporária para o destino final
            if ($arquivo["type"] != "image/jpeg") {
                echo "<div class='bg-red-50 text-red-600 text-sm p-3 rounded-lg border border-red-100 font-medium mt-4'>Tipo não suportado</div>";
            } else if ($arquivo["size"] > 70000) {
                echo "<div class='bg-red-50 text-red-600 text-sm p-3 rounded-lg border border-red-100 font-medium mt-4'>Arquivo grande demais</div>";
            } else {
                if (move_uploaded_file($arquivo['tmp_name'], $caminho)) {
            ?>
                    <div class="flex flex-col items-center pt-4">
                        <span class="text-sm font-semibold text-slate-400 block uppercase tracking-wider mb-2 self-start">Foto de Perfil</span>
                        <img src="<?php echo $caminho; ?>" alt="Foto de Perfil" class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-md ring-1 ring-slate-200">
                    </div>
                <?php
                } else {
                    echo "<div class='bg-red-50 text-red-600 text-sm p-3 rounded-lg border border-red-100 font-medium mt-4'>Erro ao enviar o arquivo.</div>";
                }
            }
            echo "<p class='text-lg font-medium text-slate-900'><span class='text-sm font-semibold text-slate-400 block uppercase tracking-wider'>Nome</span> " . $_POST['nome'] . " " . $_POST['sobrenome'] . "</p>";
            echo "<p class='text-slate-700'><span class='text-sm font-semibold text-slate-400 block uppercase tracking-wider'>Altura</span> " . $_POST['altura'] / 100;
            echo "m</p>";
            $dataSelecionada = $_POST["nascimento"];
            echo "<p class='text-slate-600 text-sm'><span class='text-sm font-semibold text-slate-400 block uppercase tracking-wider'>Data Original</span> " . $dataSelecionada . "</p>";
            $date = new DateTime($dataSelecionada);
            $date2 = new DateTime();
            $idade = $date->diff($date2);
            echo "<p class='text-slate-700'><span class='text-sm font-semibold text-slate-400 block uppercase tracking-wider'>Idade</span> " . $idade->format('%Y Anos') . "</p>";
            $date->modify('30 minutes');
            $dataBrasileira = $date->format('d/m/y h:i:s');
            echo "<p class='text-slate-700'><span class='text-sm font-semibold text-slate-400 block uppercase tracking-wider'>Data de Nascimento</span> " . $dataBrasileira . "</p>";

            if ($_POST['sexo'] != "definir" && isset($_POST['horario']) && isset($_POST['area']) && !empty($_FILES['arquivo']['name'])) {
                echo "<p class='text-slate-700'><span class='text-sm font-semibold text-slate-400 block uppercase tracking-wider'>Sexo</span>" . $_POST['sexo'] . "</p>";
                echo "<p class='text-slate-700'><span class='text-sm font-semibold text-slate-400 block uppercase tracking-wider'>Horário Disponível</span>" . $_POST['horario'] . "</p>";
                echo "<p class='text-sm font-semibold text-slate-400 block uppercase tracking-wider mt-2'>Áreas de Interesse</p>";
                ?>

                <ul class="list-disc list-inside bg-slate-50 p-3 rounded-lg border border-slate-100 text-slate-700 font-medium space-y-1">
                    <?php
                    foreach ($_POST['area'] as $indice => $valor) {
                        echo "<li> $valor </li>";
                    }
                    ?>
                </ul>

            <?php
            } else {
                header('location:aula03.php');
            }
            ?>
        </div>

        <!-- BOTÃO VOLTAR -->
        <div class="w-full pt-6 mt-6 border-t border-slate-100">
            <a href="aula03.php" class="block w-full text-center bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold py-2.5 px-4 rounded-lg transition duration-200 uppercase tracking-wide text-sm">
                Voltar
            </a>
        </div>

    </div>

</body>

</html>