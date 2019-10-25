<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
</head>

<body>
    <h1>Calcular media</h1>
    <!-- Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo. -->
    <form action="10.php" method="post">
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">
    </form>
    <p>
        <?php
        session_start();
        if (!empty($_POST['num'])) {
            $num = $_POST['num'];
            if ($num >= 0) {
                $_SESSION['array'][count($_SESSION['array'])] = $num;
                echo 'Numeros: ';
                foreach ($_SESSION['array'] as $valor) {
                    echo $valor . " ";
                }
            } else {
                echo "Media: " . (array_sum($_SESSION['array']) / count($_SESSION['array']));
                unset($_SESSION['array']);
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