<!-- Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se deberá introducir por teclado. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 02</title>
</head>

<body>
    <form action="02.php" method="post">
        <label for="euros">Euros: </label>
        <input type="number" step="0.01" name="euros" id="euros">
        <input type="submit" value="A pesetas">
    </form>
    <br>
    <?php
    if (isset($_POST['euros'])) {
        echo "${_POST['euros']} euros son " . ($_POST['euros'] * 166.386) . " pesetas";
    }
    ?>
</body>

</html>