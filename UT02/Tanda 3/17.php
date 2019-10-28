<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 16</title>
</head>

<body>
    <h1>Suma de los 100 primeros</h1>
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
        if (isset($_POST['numero']) && $_POST['numero'] > 0) {
            $numero = $_POST['numero'];
            
        }
        ?>

    </p>
</body>

</html>