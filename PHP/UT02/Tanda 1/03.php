<!-- Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá introducir por teclado. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 03</title>
</head>

<body>
    <form action="03.php" method="post">
        <label for="pesetas">Pesetas: </label>
        <input type="number" step="0.01" name="pesetas" id="pesetas">
        <input type="submit" value="A euros">
    </form>
    <?php
    if (isset($_POST['pesetas'])) {
        echo "${_POST['pesetas']} pesetas son " . sprintf("%.2f euros", ($_POST['pesetas'] / 166.386));
    }
    ?>
</body>

</html>