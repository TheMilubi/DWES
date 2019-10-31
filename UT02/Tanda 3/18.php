<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 18</title>
</head>

<body>
    <h1>Números enteros comprendidos entre dos números</h1>
    <!-- Escribe un programa que obtenga los números enteros comprendidos entre dos números 
    introducidos por teclado y validados como distintos, el programa debe empezar por el 
    menor de los enteros introducidos e ir incrementando de 7 en 7. -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <label for="numero">A: </label>
            <input type="number" name="numA" id="numA">
            <label for="numero">B: </label>
            <input type="number" name="numB" id="numB">
        </p>

        <input type="submit" name="enviar" value="Enviar">
    </form>
    <p>
        <?php
        if (isset($_POST['numA']) && isset($_POST['numB']) &&  $_POST['numA'] >= 0 && $_POST['numB'] >= 0) {
            $menor = $_POST['numA'] < $_POST['numB'] ? $_POST['numA'] : $_POST['numB'];
            $mayor = $_POST['numA'] > $_POST['numB'] ? $_POST['numA'] : $_POST['numB'];
            echo "Numero entre a y b de siete en siete: ";
            for($i = $menor; $i < $mayor; $i+=7){
                echo "$i ";
            }
        }
        ?>

    </p>
</body>

</html>