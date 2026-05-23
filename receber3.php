<?php
if (isset($_COOKIE["usuario"])) {
    echo "Bem-vindo de volta, " . $_COOKIE["usuario"];
} else {
    echo "Bem-vindo, visitante!";
}
