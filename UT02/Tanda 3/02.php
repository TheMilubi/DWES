<!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while . -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T3 02</title>
</head>

<body>
<h1>Múltiplos de 5 entre 0 y 100</h1>
    <?php
    $i = 0;
    while ($i <= 100) { 
        echo "<br>$i";
        $i+=5;
    }
    ?>
</body>

</html>