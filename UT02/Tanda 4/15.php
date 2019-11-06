<!-- Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada 
una posición en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 
columnas y debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto la
matriz original como la matriz resultado, ambas con los números convenientemente alineados. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 2px black solid;
            text-align: center;
        }

        th {
            background-color: lightsalmon;
        }
    </style>
    <title>Ejercicio 15</title>
</head>

<body>
    <h1>Girar una matriz en el sentido de las agujas del reloj</h1>
    <?php
    ///////////////////////////////////////////////////////////////////////////
    // Crea el array lineal con 144 números aleatorios enteros entre 0 y 100
    ///////////////////////////////////////////////////////////////////////////
    $array = [];
    for ($i = 0; $i < 144; $i++) {
        $array[] = rand(0, 99);
    }
    ////////////////////////////////////////////////////////////////////
    // Transforma el array liena en una matriz bidimensional
    ////////////////////////////////////////////////////////////////////
    $matriz = [];
    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {
            $matriz[$i][$j] = $array[$i * 12 + $j];
        }
    }
    ////////////////////////////////////////////////////////////////////
    // Muestra la matriz original
    ////////////////////////////////////////////////////////////////////
    echo "<table>";
    echo "<tr><th colspan='13'>Array original</th></tr>";
    echo "<tr><th>F/C</th>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<th>$i</th>";
    }
    echo "<tr>";
    foreach ($matriz as $fila => $array) {
        echo "<tr>";
        echo "<th>$fila</th>";
        foreach ($array as $columna => $elemento) {
            echo "<td>" . $elemento . "</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";

    /////////////////////////////////////////////////////////////////////////
    // Trasponer matriz
    /////////////////////////////////////////////////////////////////////////
    $matrizTraspuesta = [];
    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {
            $matrizTraspuesta[$i][$j] = $matriz[11 - $j][$i];
        }
    }
    ////////////////////////////////////////////////////////////////////
    // Muestra la matriz traspuesta
    ////////////////////////////////////////////////////////////////////
    echo "<table>";
    echo "<tr><th colspan='13'>Array girado</th></tr>";
    echo "<tr><th>F/C</th>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<th>$i</th>";
    }
    echo "<tr>";
    foreach ($matrizTraspuesta as $fila => $array) {
        echo "<tr>";
        echo "<th>$fila</th>";
        foreach ($array as $columna => $elemento) {
            echo "<td>" . $elemento . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <p>
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>">&lt;&lt; Volver</a>
    </p>
</body>

</html>