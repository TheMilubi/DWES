<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 16</title>
</head>

<body>
    <!-- Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado. -->
    <form action="16.php" method="post">
        <label for="numero">Número: </label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular">
    </form>
    <br><br>
    <?php
    if (isset($_POST['numero'])) {
        $num = $_POST['numero'];
        $r = ($num>=0) ? $num : ($num * -1);
        $r = $r - floor($r / 10) * 10;
        if ($num > 99999 || $num <-99999){
            echo 'Sólo se permiten números de 5 cifras';
        }
        else{
            echo "La última cifra es $r";
        }
    }
    ?>
</body>

</html>