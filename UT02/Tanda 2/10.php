<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT2 T2 10</title>
</head>

<body>
    <form action="10.php" method="post">
        <label for="dia">Día: </label>
        <input type="number" name="dia" id="dia">
        <label for="mes">Mes: </label>
        <input type="number" name="mes" id="mes">
        <input type="submit" value="Calcular signo del horóscopo">
    </form>
    <br>
    <?php
    function signo_zodiaco($dia, $mes)
    {
        $zodiaco = '';
        if (($mes == 1 && $dia > 19)  || ($mes == 2 && $dia < 19)) {
            $zodiaco = "Acuario";
        } elseif (($mes == 2 && $dia > 18)  || ($mes == 3 && $dia < 21)) {
            $zodiaco = "Piscis";
        } elseif (($mes == 3 && $dia > 20)  || ($mes == 4 && $dia < 20)) {
            $zodiaco = "Aries";
        } elseif (($mes == 4 && $dia > 19)  || ($mes == 5 && $dia < 21)) {
            $zodiaco = "Tauro";
        } elseif (($mes == 5 && $dia > 20)  || ($mes == 6 && $dia < 21)) {
            $zodiaco = "Géminis";
        } elseif (($mes == 6 && $dia > 20)  || ($mes == 7 && $dia < 23)) {
            $zodiaco = "Cáncer";
        } elseif (($mes == 7 && $dia > 22)  || ($mes == 8 && $dia < 23)) {
            $zodiaco = "Leo";
        } elseif (($mes == 8 && $dia > 22)  || ($mes == 9 && $dia < 23)) {
            $zodiaco = "Virgo";
        } elseif (($mes == 9 && $dia > 22)  || ($mes == 10 && $dia < 23)) {
            $zodiaco = "Libra";
        } elseif (($mes == 10 && $dia > 22) || ($mes == 11 && $dia < 22)) {
            $zodiaco = "Escorpio";
        } elseif (($mes == 11 && $dia > 21) || ($mes == 12 && $dia < 22)) {
            $zodiaco = "Sagitario";
        } elseif (($mes == 12 && $dia > 21) || ($mes == 1 && $dia < 20)) {
            $zodiaco = "Capricornio";
        }
        return $zodiaco;
    }
    if (isset($_POST['dia']) && isset($_POST['mes'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        echo "Signo del zodíaco: " . signo_zodiaco($dia, $mes);
    }
    ?>
</body>

</html>