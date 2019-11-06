<!-- Escribe un programa que pida 10 números por teclado y que luego muestre los números 
introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo 
respectivamente. -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <style>
    </style>
</head>

<body>
    <h1>Introducir 10 números, obtener el máximo y el mínimo</h1>

    <form action="02.php" method="get">
        Introduzca un número:
        <input type="number" name="n" autofocus>
        <input type="submit" value="OK">
    </form>
    <br>
    <?php
    session_start();
    $_SESSION['n'][] = $_GET['n'];
    if (count($_SESSION['n']) == 10) {
        $numero = $_SESSION['n'];
        $maximo = -PHP_INT_MAX;
        $minimo = PHP_INT_MAX;


        foreach ($numero as $n) {
            if ($n < $minimo) {
                $minimo = $n;
            }
            if ($n > $maximo) {
                $maximo = $n;
            }
        }

        foreach ($numero as $n) {
            echo "$n";
            if ($n == $minimo) {
                echo " mínimo";
            }
            if ($n == $maximo) {
                echo " máximo";
            }
            echo "<br>";
        }
        unset($_SESSION['n']);
    }
    ?>
</body>

</html>