<!-- Realiza un programa que pida una hora por teclado y que muestre luego buenos días, 
buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 
y de 21 a 5. respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben 
introducir por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT 02 T2 02</title>
</head>

<body>
    <form action="02.php" method="post">
        <label for="hora">Hora actual:</label>
        <input type="number" name="hora" id="hora">
        <input type="submit" value="Obtener saludo">
    </form>
    <br>
    <?php
    if (isset($_POST['hora'])) {
        $hora = $_POST['hora'];
        if ($hora >= 0 && $hora < 6) {
            echo 'Buenas noches';
        } elseif ($hora < 12) {
            echo 'Buenos días';
        } elseif ($hora < 21) {
            echo 'Buenas tardes';
        } elseif ($hora <= 24) {
            echo 'Buenas noches';
        }
    }
    ?>

</body>

</html>