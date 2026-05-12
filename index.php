<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Criei duas variaveis chamadas n1 e n2 que armazenam o tipo de dado String (alfanumerico)

    $s1 = "Hello";
    $s2 = "World";

    echo "$s1 $s2 <br/>";
    /*
        Existe a diferença entre "" e '', onde nas aspas duplas eu vejo o valor da variavel e nas
        aspas simples eu vejo o nome da variável
    */
    echo '$s1 $s2 <br/>';
    // criando uma variável n e armazenando números inteiros (int)
    $n = 0;
    echo "$n <br/>";
    // criando uma variável f e armazenando números decimais (float)
    $f = 0.0;
    echo "$f <br/>";
    // criando uma variável b e armazenando valores booleanos (boolean)
    $b = true;
    echo "$b <br/>";
    // criando uma variável d e armazenando data (date)
    $d = date('d/m/y');
    echo $d . "<br>";

    //Operadores aritméticos + -  * / % =

    $n1 = 5;
    $n2 = 2;

    $r = $n1 + $n2;
    echo "$n1 + $n2 = " . $r . "<br/>";
    $r = $n1 - $n2;
    echo "$n1 - $n2 = " . $r . "<br/>";
    $r = $n1 * $n2;
    echo "$n1 * $n2 = " . $r . "<br/>";
    $r = $n1 / $n2;
    echo "$n1 / $n2 =" . $r . "<br/>";
    $r = $n1 % $n2;
    echo "$n1 % $n2 =" . $r . "<br/>";
    $n1++;
    echo $n1 . "<br/>"; // $n1 = $n1+1
    echo ++$n1 . "<br/>";
    echo $n1 += 5;
    echo "<br/>"; //$n1 = $n1+5
    echo --$n2  . "<br/>";
    echo $n2 -= 5;
    echo " <br/>"; // $n2 = $n2-2
    /*
    if(condição){

    }else{

    }

    Condição trabalha geralmente com operador relacional

    >   maior
    >=  maior igual
    <   menor
    <=  menor igual
    ==  igual de comparação
    === igual de comparação com tipo de dado
*/
    if ($n1 % 2 == 0) {
        echo "$n1 é par";
    } else {
        echo "$n1 é impar";
    }
    ?>
    <br>
    <?php
    if ($n2 > 0) {
    ?>
        n2 é positivo <br>
    <?php
    } else if ($n2 < 0) {
        echo 'n2 é negativo';
    ?>
        <br>
    <?php
    } else {
        echo 'n2 é 0';
    }
    ?>
    <p>
        Operadores Lógicos (e = && /ou = ||)
    </p>

    <?php
    /*
            c1  ol  c2  r
            v   e   v   v
            v   e   f   f
            f   e   v   f
            f   e   f   f
            v   ou  v   v
            v   ou  f   v
            f   ou  v   v
            f   ou  f   f
        */
    if ($n1 > 5 && $n1 < 10) {
        echo "numero entre 6 e 9";
    } else {
        echo "numero menor que 6 ou maior que 9 <br>";
    }
    ?>
    <br>
    <?php
    if ($n2 < 5 || $n2 > 10) {
        echo "numero menor que 5 ou maior que 10";
    } else {
        echo "numero entre 5 e 9";
    }
    ?>
    <br>
    <?php
    $idade = 20;
    $status = ($idade >= 18) ? "Maior de idade" : "Menor de idade"; // Retorna: Maior de idade
    echo $status;
    $dia = 3;
    switch ($dia) {
        case 1:
            echo "segunda";
            break;
        case 2:
            echo "terça";
            break;
        case 3:
            echo "quarta";
            break;
        case 4:
            echo "quinta";
            break;
        case 5:
            echo "sexta";
            break;
        case 6:
            echo "sabado";
            break;
        case 7:
            echo "domingo";
            break;
        default:
            echo "numero invalido";
    }
    ?>
</body>

</html>