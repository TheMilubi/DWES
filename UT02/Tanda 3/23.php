<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 23</title>
</head>

<body>
    <h1>Total, contador y media</h1>
    <!-- Escribe un programa que permita ir introduciendo una serie indeterminada de números 
    hasta que la suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe 
    mostrar el total acumulado, el contador de los números introducidos y la media. -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <label for="numero">Numero: </label>
            <input type="number" name="numero" id="numero">
        </p>

        <input type="submit" name="enviar" value="Enviar">
    </form>
    <p>
        <?php
        session_start();
        if (isset($_POST['numero']) &&  $_POST['numero'] >= 0) {
            $_SESSION['numero'][] = $_POST['numero'];
            if (array_sum($_SESSION['numero']) > 10000) {
                echo "Total: " . array_sum($_SESSION['numero']) . "<br>";
                echo "Contador: " . count($_SESSION['numero']) . "<br>";
                echo "Media: " . array_sum($_SESSION['numero'])/count($_SESSION['numero']) . "<br>";
                unset($_SESSION['numero']);
            }
        }
        ?>

    </p>
</body>

</html>