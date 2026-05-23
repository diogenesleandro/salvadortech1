<?php
session_start();
if (empty($_SESSION['login']) && empty($_SESSION['senha'])) {

    header("location:aula05.php");
} else if ($_SESSION['nivel'] == "administrador") {

    header("location:administrador.php");
} else {
    echo $_SESSION['login'];
?>
    <br>
    <?php
    echo $_SESSION['senha'];
    ?>
    <br>
<?php
    echo $_SESSION['nivel'];
}
?>
<br>

<a href="fechar.php">Sair do sistema</a>