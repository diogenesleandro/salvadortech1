
<?php

$arquivo = $_FILES['arquivo'];
if ($arquivo["type"] != "image/jpeg") {
    echo "tipo não suportado";
} else if ($arquivo["size"] > 70000) {
    echo "arquivo grande demais";
}
echo "<br>Nome:" . $arquivo["name"] .
    "<br>Tipo:" . $arquivo["type"] .
    "<br>Tamanho:" . $arquivo["size"] .
    "<br>caminho:" . $arquivo['full_path'];
?>

            
           
 