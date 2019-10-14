<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 04</title>
</head>

<body>
    <form action="04.php" method="post">
        <label for="horas">Horas trabajadas:</label>
        <input type="number" min="0" step="0.01" name="horas" id="horas">
        <input type="submit" value="Calcular salario">
    </form>
    <br>
    <?php
    if (isset($_POST['horas'])) {
        $horas = $_POST['horas'];
        if ($horas >= 0 && $horas <= 40) {
            echo "$horas x 12 = " . sprintf("%.2f euros<br>", ($horas * 12));
        } else {
            echo "40 x 12 + " . ($horas - 40) . " x 16 = " . sprintf("%.2f euros<br>", 40 * 12 + ($horas - 40) * 16);
        }
    }
    ?>
</body>