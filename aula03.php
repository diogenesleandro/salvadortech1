<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="receber1.php" method="post" enctype="multipart/form-data">
        NOME:<input type="text" name="nome" required><br>
        SOBRENOME:<input type="text" name="sobrenome" required><br>
        DATA DE NASCIMENTO: <input type="date" name="nascimento" required><br>
        ALTURA:<input type="number" name="altura" required>cm<br>
        SEXO:<br>
        <select name="sexo">
            <option value="definir">Selecionar</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select><br>
        HORÁRIO DISPONIVEL: <br>
        <input type="radio" name="horario" value="Noturno"> Noite
        <input type="radio" name="horario" value="Vespertino"> Tarde
        <input type="radio" name="horario" value="Matutino"> Manhã
        <input type="radio" name="horario" value="Diurno"> Dia
        <br>
        ÁREA DE INTERESSE: <br>
        <input type="checkbox" name="area[]" value="Front End"> Front End
        <input type="checkbox" name="area[]" value="Back End"> Back End
        <input type="checkbox" name="area[]" value="Full Stack"> Full Stack
        <br>
        <input type="file" name="arquivo">
        <br>
        <input type="submit" value="enviar">
    </form>
</body>

</html>