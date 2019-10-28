<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 16</title>
</head>

<body>
    <h1>¿Es primo?</h1>
    <!-- Escribe un programa que diga si un número introducido por teclado es o no primo. 
    Un número primo es aquel que sólo es divisible entre él mismo y la unidad. -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <label for="numero">Numero: </label>
            <input type="number" name="numero" id="numero">
        </p>

        <input type="submit" name="enviar" value="Enviar">
    </form>
    <p>
        <?php
        if (isset($_POST['numero'])) {
            $numero = abs($_POST['numero']);
            $i = 2;
            $primo = false;
            while ($i < $numero && $count == 0) {
                if($numero % $i == 0) $count++;
                echo $primo;
                $i++;
            }
            if ($count == 0) echo "Es primo";
            else echo "No es primo";
        }
        ?>

    </p>
</body>

</html>