<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 11</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        caption {
            border: solid black 2px;
            padding: 1rem;
            text-align: center;

        }
    </style>
</head>

<body>
    <h1>Calcular media</h1>
    <!-- Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números enteros a partir de uno que se introduce por teclado. -->
    <form action="11.php" method="post">
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">
    </form>
    <p>
        <?php
        session_start();
        if (!empty($_POST['num'])) {

            echo "<table>";
            echo "<caption>Tabla de potencias</caption>";
            for ($i = $_POST['num']; $i < ($_POST['num']+5); $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>" . $i ** 2 . "</td>";
                echo "<td>" . $i ** 3 . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } 
        ?>
    </p>
</body>

</html>