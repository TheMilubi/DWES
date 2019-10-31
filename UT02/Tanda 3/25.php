<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 25</title>
</head>

<body>
    <h1>Voltea</h1>
    <!-- Realiza un programa que pida un número por teclado y que luego muestre ese número al revés. -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            Por favor, introduzca un número entero:
            <input type="number" name="n" min="0" autofocus="" required=""><br>
        </p>
        <input type="submit" value="Aceptar">
    </form>
    <p>
    <?php
    if ($_POST['n']) {
        $n = $_POST['n'];
        $volteado = 0;

        $numero = $n;
        while ($numero > 0) {
            $volteado = ($volteado * 10) + ($numero % 10);
            $numero = floor($numero / 10);
        } 

        echo "Si le damos la vuelta al $n tenemos el $volteado";
    }
    ?>
    </p>
</body>

</html>