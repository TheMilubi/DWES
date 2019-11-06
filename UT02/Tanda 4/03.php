<!-- Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota
 los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 
 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe pasar a la 
 posición 0. Finalmente, muestra el contenido del array. -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
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
    <h1>Introducir 15 números, rotar posiciones</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        Introduzca un número:
        <input type="number" name="n" autofocus>
        <input type="submit" value="OK">
    </form>
    <br>
    <?php
    session_start();
    $_SESSION['n'][] = $_GET['n'];
    if (count($_SESSION['n']) == 15) {
        $numero = $_SESSION['n'];

        // Muestra el array original

        echo "Array original:<br>";

        echo "<table><tr>";

        for ($i = 0; $i < 15; $i++) {
            echo "<td>$i</td>";
        }

        echo "</tr>";

        for ($i = 0; $i < 15; $i++) {
            echo "<td>" . $numero[$i] . "</td>";
        }

        echo "</tr></table>";


        // Rota los elementos del array hacia la derecha

        $aux = $numero[14];

        for ($i = 14; $i > 0; $i--) {
            $numero[$i] = $numero[$i - 1];
        }

        $numero[0] = $aux;

        // Muestra el array rotado

        echo "<br>Array rotado:<br>";
        echo "<table><tr>";

        for ($i = 0; $i < 15; $i++) {
            echo "<td>$i</td>";
        }

        echo "</tr>";

        for ($i = 0; $i < 15; $i++) {
            echo "<td>" . $numero[$i] . "</td>";
        }

        echo "</tr></table>";
        unset($_SESSION['n']);
    }

    ?>
</body>

</html>