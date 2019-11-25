<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 06</title>
</head>

<body>
    <form action="06.php" method="post">
        <label for="base">Base:</label>
        <input type="number" step="0.001" name="base" id="base">
        <label for="altura">Altura:</label>
        <input type="number" step="0.001" name="altura" id="altura">
        <input type="submit" value="Calcular área">
    </form>
    <br>
    <?php
    if (isset($_POST['base']) && isset($_POST['altura'])) {
        echo "${_POST['base']} x ${_POST['altura']} / 2 = " . sprintf("%.2f<br>", ($_POST['base'] * $_POST['altura'] / 2));
    }
    ?>
</body>