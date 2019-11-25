<!-- Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 22</title>
</head>

<body>
    <h1>Números primos entre 2 y 100:</h1>
    <?php

    for ($n = 2; $n <= 100; $n++) {
        $esPrimo = true;
        for ($i = 2; $i < ($n / 2) + 1; $i++) {
            if ($n % $i == 0) {
                $esPrimo = false;
            }
        }
        if ($esPrimo) {
            echo "$n&nbsp;&nbsp;";
        }
    }
    ?>
</body>

</html>