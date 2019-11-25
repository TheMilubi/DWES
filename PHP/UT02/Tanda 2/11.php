<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT2 T2 11</title>
</head>

<body>
    <form action="11.php" method="post">
        <label for="hora">Hora: </label>
        <input type="number" min="0" max="23" name="hora" id="hora">
        <label for="minuto">Minutos: </label>
        <input type="number" min="0" max="59" name="minuto" id="minuto">
        <input type="submit" value="Calcular segundos hasta media noche">
    </form>
    <br>
    <?php
    if (isset($_POST['hora']) && isset($_POST['minuto'])) {
        $segundos = $_POST['hora'] * 3600 + $_POST['minuto'] * 60;
        $mediaNoche = 24 * 3600;
        $r = $mediaNoche - $segundos;
        echo "Segundos hasta media noche: ${r}s";
    }
    ?>
</body>

</html>