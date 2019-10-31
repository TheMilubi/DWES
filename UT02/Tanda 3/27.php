<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 27</title>
</head>

<body>
    <h1>Múltiplos de 3</h1>
    <!-- Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y 
        un número leído por teclado. -->
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
            $cuenta = 0;
            $suma = 0;
            echo "Mútliplos:&nbsp;&nbsp;&nbsp;";
            for ($i = 1; $i <= $n; $i++) {
                if (($i % 3) == 0) {
                    echo "$i&nbsp;&nbsp;&nbsp;";
                    $cuenta++;
                    $suma += $i;
                }
            }
            echo "<br><br>Desde 1 hasta $n hay $cuenta múltiplos de 3 y suman $suma.";
        }
        ?>
    </p>
</body>

</html>