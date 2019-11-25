<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 28</title>
</head>

<body>
    <h1>Factorial</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            Introduzca un número entero: <input type="number" name="n" min="1" autofocus="" required=""><br>
        </p>
        <input type="submit" value="Aceptar">
    </form>
    <p>
        <?php
        if (isset($_POST['n'])) {
            $n = $_POST['n'];
            $factorial = 1;
            echo "Factorial:&nbsp;&nbsp;&nbsp;";
            for ($i = 1; $i <= $n; $i++) {
                $factorial *= $i;
            }
            echo $factorial;
        }
        ?>
    </p>
</body>

</html>