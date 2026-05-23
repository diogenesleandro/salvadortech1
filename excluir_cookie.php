<p>Exluindo o indice usuario no cookie</p>
<?php
// Define a expiração para 1 hora atrás
setcookie("usuario", "", time() - 3600, "/");
