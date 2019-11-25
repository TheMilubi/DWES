<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 26</title>
</head>

<body>
    <h1>Posición</h1>
    <!-- Realiza un programa que pida primero un número y a continuación un dígito. El programa 
    nos debe dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese 
    dígito en el número introducido. -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            Introduzca un número entero: <input type="number" name="n" min="0" autofocus="" required=""><br>
        </p>
        <p>
            Introduzca un dígito: <input type="number" name="digito" min="0" max="9" required="">
        </p>
        <input type="submit" value="Aceptar">
    </form>
    <p>
        <?php
        if (isset($_POST['n'])) {
            $n = $_POST['n'];
            $digito = $_POST['digito'];
            $volteado = 0;
            $longitud = 0;
            $posicion = 1;

            echo "Contando de izquierda a derecha, el $digito aparece dentro de $n en las siguientes posiciones:&nbsp;&nbsp;";

            // le da la vueta al número y calcula la longitud
            $numero = $n;
            if ($numero == 0) {
                $longitud = 1;
            }

            while ($numero > 0) {
                $volteado = ($volteado * 10) + ($numero % 10);
                $numero = floor($numero / 10);
                $longitud++;
            } // while


            // comprueba la posición
            while ($volteado > 0) {
                if (($volteado % 10) == $digito) {
                    echo "$posicion&nbsp;&nbsp;";
                }
                $volteado = floor($volteado / 10);
                $posicion++;
            } // while
        } // else
        ?>
    </p>
</body>

</html>