<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        LOGIN:<input type="text" name="login">
        SENHA:<input type="password" name="senha">
        <input type="submit" value="ENTRAR">
    </form>
    <div>
        <?php
        session_start();

        if (isset($_POST['login']) && isset($_POST['senha'])) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            if ($login == "diogenes_u" && $senha == "1234") {
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                $_SESSION['nivel'] = "usuario";
                header('location:usuario.php');
            } else if ($login == "diogenes_a" && $senha == "1234") {
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                $_SESSION['nivel'] = "administrador";
                header('location:administrador.php');
            } else {
                echo "login ou senha incorretos";
            }
        }

        ?>
    </div>
</body>

</html>