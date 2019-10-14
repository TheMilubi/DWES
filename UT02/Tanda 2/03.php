<!-- Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre 
del día de la semana. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 03</title>
</head>

<body>
    <form action="03.php" method="post">
        <label for="diaSemana">Numero del 1 al 7:</label>
        <input type="number" min="1" max="7" name="diaSemana" id="diaSemana">
        <input type="submit" value="Obtener saludo">
    </form>
    <br>
    <?php
    if (isset($_POST['diaSemana'])) {
        $nDia = $_POST['diaSemana'];
        switch ($nDia) {
            case 1:
                echo 'Lunes';
                break;
            case 2:
                echo 'Martes';
                break;
            case 3:
                echo 'Miércoles';
                break;
            case 4:
                echo 'Jueves';
                break;
            case 5:
                echo 'Vierens';
                break;
            case 6:
                echo 'Sábado';
                break;
            case 7:
                echo 'Domingo';
                break;
            default:
                echo 'Dime un número del 1 al 7';
        }
    }
    ?>
</body>

</html>