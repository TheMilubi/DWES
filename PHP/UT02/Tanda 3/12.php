<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 12</title>
</head>

<body>
    <!-- Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer 
término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos 
anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 
144... El número n se debe introducir por teclado. -->
    <h1>Fibonacci</h1>
    <form action="12.php" method="post">
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">
    </form>
    <p>
        <?php
        function fibonacci($n)
        {
            $actual = 0;
            $sig = 1;
            for ($z = 0; $z < $n; $z++) {
                $copia = $sig;
                $sig += $actual;
                $actual = $copia;
            }
            return $actual;
        }
        if (isset($_POST['num'])) {
            try {
                $num = fibonacci($_POST['num']);
                echo "Número ${_POST['num']}: $num";
            } catch (Exception $e) {
                echo 'Error, valor no válido';
            }
        }
        ?>
    </p>

</body>

</html>