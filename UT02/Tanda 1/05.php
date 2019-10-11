<!-- Escribe un programa que calcule el área de un rectángulo. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 05</title>
</head>

<body>
    <form action="05.php" method="post">
        <label for="lado1">Lado:</label>
        <input type="number" step="0.001" name="lado1" id="lado1">
        <label for="lado2">Lado:</label>
        <input type="number" step="0.001" name="lado2" id="lado2">
        <input type="submit" value="Calcular área">
    </form>
    <br>
    <?php
    if (isset($_POST['lado1']) && isset($_POST['lado2'])) {
        echo "${_POST['lado1']} x ${_POST['lado2']} = " . sprintf("%.2f<br>", ($_POST['lado1'] * $_POST['lado2']));
    }
    ?>
</body>