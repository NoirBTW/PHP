<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        $a = 10;
        $c = 33;
        echo("{$a} + X = {$c} <br/>");
        for ($x = 0; $a + $x !== $c; $x++) {
        }
        echo("Значение неизвестной переменной равно {$x}")
        ?>
    </h1>
</body>
</html>