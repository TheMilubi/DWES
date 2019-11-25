<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while . -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T3 06</title>
</head>

<body>
    <h1>Números del 320 al 160 contado de 20 en 20</h1>
    <?php
    $i = 320;
    do {
        echo "<br>$i";
        $i -= 20;
    }while ($i >= 160)
    ?>
</body>

</html>