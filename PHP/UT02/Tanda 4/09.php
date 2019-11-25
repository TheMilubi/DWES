<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 9</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: .1rem black solid;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Introduce 10 números, genera array y sustituye elemento</h1>
    <?php

    if (!isset($_GET['n'])) {
        $contadorNumeros = 1;
        $numeroTexto = "";
    } else {
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];
    }

    if ($contadorNumeros < 11) {
        $contadorNumeros = $_GET['contadorNumeros'];
        $n = $_GET['n'];
        $numeroTexto = $_GET['numeroTexto'];

        if ($numeroTexto == "") {
            $numeroTexto = $n;
        } else {
            $numeroTexto = $numeroTexto . ' ' . $n;
        }

        $contadorNumeros++;
    }

    if (!isset($_GET['n']) || ($contadorNumeros < 11)) {
        ?>
        <form action="09.php" method="get">
            Introduzca un número:
            <input type="number" name="n" autofocus="" required="">
            <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
            <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
            <input type="submit" value="OK">
        </form>
    <?php
    }

    ////////////////////////////////////////////////////////////////
    //  Programa principal una vez recogidos los datos del array.
    //  El array con los números es $numero
    ////////////////////////////////////////////////////////////////

    // Se han introducido los números y hay que pedir las posiciones inicial y final
    if ($contadorNumeros == 11) {
        $numero = explode(" ", $numeroTexto);

        // Muestra el array original

        // Índice
        echo "Array original:<br>";
        echo "<table><tr>";
        for ($i = 0; $i < 10; $i++) {
            echo "<td>$i</td>";
        }
        echo "</tr>";

        // Contenido
        for ($i = 0; $i < 10; $i++) {
            echo "<td>" . $numero[$i] . "</td>";
        }
        echo "</tr></table>";

        // Pide las posiciones inicial y final
        ?>
        <form action="09.php" method="get">
            Posición inicial: <input type="number" name="inicial" autofocus="" min="0" max="9" required=""><br>
            Posición final: <input type="number" name="final" min="0" max="9" required=""><br>
            <input type="hidden" name="contadorNumeros" value="13">
            <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
            <input type="hidden" name="n" value="basura">
            <input type="submit" value="OK">
        </form>
    <?php
    }


    // Se han introducido los números y además las posiciones inicial y final
    if ($contadorNumeros == 13) {

        $inicial = $_GET['inicial'];
        $final = $_GET['final'];

        if (($inicial >= $final) || ($inicial < 0) || ($inicial > 9) || ($final < 0) || ($final > 9)) {

            echo 'Los datos introducidos no son correctos';
        } else {

            $numero = explode(" ", $numeroTexto);

            // Muestra el array original

            // Índice
            echo "Array original:<br>";
            echo "<table><tr>";
            for ($i = 0; $i < 10; $i++) {
                echo "<td>$i</td>";
            }
            echo "</tr>";

            // Contenido
            for ($i = 0; $i < 10; $i++) {
                echo "<td>" . $numero[$i] . "</td>";
            }
            echo "</tr></table>";

            // Rotación

            // Primer tramo
            $auxiliar = $numero[9];
            for ($i = 9; $i > $final; $i--) {
                $numero[$i] = $numero[$i - 1];
            }
            $numero[$final] = $numero[$inicial];

            // Segundo tramo
            for ($i = $inicial; $i > 0; $i--) {
                $numero[$i] = $numero[$i - 1];
            }
            $numero[0] = $auxiliar;


            // Muestra el array resultante

            // Índice
            echo "<br><br>Inicial: $inicial Final: $final<br>";
            echo "<br>Array resultante:<br>";
            echo "<table><tr>";
            for ($i = 0; $i < 10; $i++) {
                echo "<td>$i</td>";
            }
            echo "</tr>";

            // Contenido
            for ($i = 0; $i < 10; $i++) {
                echo "<td>" . $numero[$i] . "</td>";
            }
            echo "</tr></table>";
        }
    }
    ?>
    <br><br>
    <a href="09.php">>> Volver</a>
</body>

</html>