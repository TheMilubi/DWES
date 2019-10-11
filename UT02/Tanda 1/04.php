<!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 04</title>
</head>

<body>
    <form action="04.php" method="post">
        <input type="number" step="0.001" name="x" id="x">
        <input type="number" step="0.001" name="y" id="y">
        <input type="submit" value="Opera">
    </form>
    <br>
    <?php
    if (isset($_POST['x']) && isset($_POST['y'])) {
        echo "${_POST['x']} + ${_POST['y']} = " . ($_POST['x'] + $_POST['y']) . "<br>";
        echo "${_POST['x']} - ${_POST['y']} = " . ($_POST['x'] - $_POST['y']) . "<br>";
        echo "${_POST['x']} * ${_POST['y']} = " . ($_POST['x'] * $_POST['y']) . "<br>";
        echo "${_POST['x']} / ${_POST['y']} = " . sprintf("%.3f<br>", ($_POST['x'] / $_POST['y']));
    }
    ?>
</body>