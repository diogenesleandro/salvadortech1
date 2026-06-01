<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="insert_pdo.php">
        Nome:<input type="text" name="nome"><br>
        Telefone:<input type="text" name="telefone"><br>
        Email:<input type="text" name="email"><br>
        <input type="submit" value="gravar">
    </form>
    <h1>

        <?php
        session_start();
        if (isset($_SESSION['insert'])) {
            echo $_SESSION['insert'];
            session_destroy();
        }
        ?>

    </h1>
</body>

</html>