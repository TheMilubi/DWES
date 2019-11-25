<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 21</title>
</head>

<body>
    <h1>Cuenta números, suma impares, cuenta impares, mayor par</h1>
    <?php
    session_start();
    if (!isset($_POST['n'])) {
        $n = 0;
        $cuentaNumeros = 0;
        $sumaImpares = 0;
        $cuentaImpares = 0;
        $mayorPar = -PHP_INT_MAX;
    } else {
        $n = $_POST['n'];
        $cuentaNumeros = $_SESSION['cuentaNumeros'];
        $sumaImpares = $_SESSION['sumaImpares'];
        $cuentaImpares = $_SESSION['cuentaImpares'];
        $mayorPar = $_SESSION['mayorPar'];
    }

    if ($n > 0) {
        $cuentaNumeros++;
        if ($n % 2 == 0) {
            if ($n > $mayorPar) {
                $mayorPar = $n;
            }
        } else {
            $cuentaImpares++;
            $sumaImpares += $n;
        }
        $_SESSION['cuentaNumeros'] = $cuentaNumeros;
        $_SESSION['sumaImpares'] = $sumaImpares;
        $_SESSION['cuentaImpares'] = $cuentaImpares;
        $_SESSION['mayorPar'] = $mayorPar;
    }
    ?>
    <form action="21.php" method="post">
        <p>Número:
            <input type="number" name="n" autofocus="">
        </p>
        <input type="submit" value="Aceptar">
    </form>
    <p>

        <?php
        if ($n < 0) {
            echo "Se han introducido $cuentaNumeros números <br>";
            if ($cuentaImpares != 0) {
                echo "La media de los impares es " . ($sumaImpares / $cuentaImpares);
            } else {
                echo "Habían 0 impares";
            }
            echo "<br>";
            if ($mayorPar == -PHP_INT_MAX) {
                echo "No hay mayor par";
            } else {
                echo "El mayor de los pares es $mayorPar<br>";
            }
            $n = 0;
            $cuentaNumeros = 0;
            $sumaImpares = 0;
            $cuentaImpares = 0;
            $mayorPar = -PHP_INT_MAX;
            $_SESSION['cuentaNumeros'] = $cuentaNumeros;
            $_SESSION['sumaImpares'] = $sumaImpares;
            $_SESSION['cuentaImpares'] = $cuentaImpares;
            $_SESSION['mayorPar'] = $mayorPar;
        }
        ?>
    </p>
</body>

</html>