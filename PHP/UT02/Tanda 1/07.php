<!-- Escribe un programa que calcule el total de una factura a partir de la base imponible. -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio UT02 T1 07</title>
</head>

<body>
    <h1>Cálculo del total de una factura</h1>
    <form action="07.php" method="post">
        <label for="">Base imponible:</label>
        <input type="number" name="base" min="0" step="0.01" autofocus>
        <input type="submit" value="Calcular">
    </form>
    <br>
    <?php
    echo "El total de la factura es " . round($_POST['base'] * 1.21, 2), " euros.";
    ?>
</body>

</html>