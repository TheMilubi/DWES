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
            if (empty($_SESSION['count'])) {
                $_SESSION['count'] = 0;
            }
            $_SESSION['count']++;
            if ($_SESSION['count'] < 6) {
                $num = $_POST['num'];
                $_SESSION['array'][count($_SESSION['array'])] = $num;
                echo 'Numeros: ';
                foreach ($_SESSION['array'] as $valor) {
                    echo $valor . " ";
                }
            } else {
                echo "<table>";
                echo "<caption>Tabla de potencias</caption>";
                foreach ($_SESSION['array'] as $valor) {
                    echo "<tr>";
                    echo "<td>$valor</td>";
                    echo "<td>" . $valor ** 2 . "</td>";
                    echo "<td>" . $valor ** 3 . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                unset($_SESSION['array']);
                unset($_SESSION['count']);
            }
        } else {
            echo 'Numeros: ';
            foreach ($_SESSION['array'] as $valor) {
                echo $valor . " ";
            }
        }
        ?>
    </p>
</body>

</html>