<!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas 
trabajadas. Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 08</title>
</head>

<body>
    <form action="08.php" method="post">
        <label for="horas">Horas trabajadas:</label>
        <input type="number" step="0.01" name="horas" id="horas">
        <input type="submit" value="Calcular salario">
    </form>
    <br>
    <?php
    if (isset($_POST['horas'])) {
        echo "${_POST['horas']} x 12 = " . sprintf("%.2f euros<br>", ($_POST['horas'] * 12));
    }
    ?>
</body>