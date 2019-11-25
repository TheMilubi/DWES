<!-- Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca 
a primera hora ese día. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 01</title>
</head>

<body>
    <form action="01.php" method="post">
        <label for="dia">Día de la semana:</label>
        <input type="text" name="dia" id="dia">
        <input type="submit" value="Obtener">
    </form>
    <br>
    <?php
    if (isset($_POST['dia'])) {
        $dia = $_POST['dia'];
        if (preg_match("/lunes/i", $dia)) {
            echo "El lunes tenemos DWES a primera hora";
        } elseif (preg_match("/martes/i", $dia)) {
            echo "El martes tenemos EIE a primera hora";
        } elseif (preg_match("/mi(e|é|É)rcoles/i", $dia)) {
            echo "El miércoles tenemos DIW a primera hora";
        } elseif (preg_match("/jueves/i", $dia)) {
            echo "El jueves tenemos DIW a primera hora";
        } elseif (preg_match("/viernes/i", $dia)) {
            echo "El viernes tenemos DWES a primera hora";
        } else {
            echo "Escribe bien el día";
        }
    }
    ?>

</body>

</html>