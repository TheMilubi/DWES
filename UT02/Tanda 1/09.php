<!-- Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 13 πr 2 h. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 09</title>
</head>

<body>
    <h1>Calcular volumen de un cono</h1>
    <form action="09.php" method="post">
        <label for="radio">Radio:</label>
        <input type="number" step="0.001" name="radio" id="radio">
        <label for="altura">Altura: </label>
        <input type="number" step="0.001" name="altura" id="altura">
        <input type="submit" value="Calcular volumen">
    </form>
    <br>
    <?php
    define("pi", 3.14, true);
    if (isset($_POST['radio']) && isset($_POST['altura'])) {
        echo "El volumen equivale a " . ($_POST['radio'] ** 2 * pi * $_POST['altura'] / 3);
    }
    ?>
</body>

</html>