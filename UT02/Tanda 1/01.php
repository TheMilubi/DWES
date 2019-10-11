<!-- Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 01</title>
</head>

<body>
    <form action="01.php" method="post">
        <input type="number" name="x" id="x">
        <input type="number" name="y" id="y">
        <input type="submit" value="Multiplica">
    </form>
    <?php
    if (isset($_POST['x']) && isset($_POST['y'])) {
        echo "${_POST['x']} x ${_POST['y']} = " . ($_POST['x'] * $_POST['y']);
    }
    ?>
</body>

</html>