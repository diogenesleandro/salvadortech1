<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($factor = 1; $factor <= 10; $factor++) {
        for ($multiplier = 1; $multiplier <= 10; $multiplier++) {
            $total = $factor * $multiplier;

            echo "$factor x $multiplier = $total <br />";
        }
    }
    ?>
</body>

</html>