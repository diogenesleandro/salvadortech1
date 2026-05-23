<?php
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {

    header("location:aula05.php");
} else if ($_SESSION['nivel'] == "usuario") {

    header("location:usuario.php");
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