<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 09</title>
</head>

<body>
    <!-- Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado. -->
    <h1>Digitos</h1>
    <form action="09.php" method="post">
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">
    </form>
    <p>
        <?php
        if (isset($_POST['num'])) { 
            $str = strval(abs($_POST['num']));
            echo "Cifras: " . strlen($str);
        }
        ?>
    </p>
</body>

</html>