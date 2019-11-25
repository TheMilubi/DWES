<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 10</title>
</head>

<body>
    <h1>Puntuación de la Brisca</h1>
    <?php
    $puntuacion = array(
        'As' => 11, 'Dos' => 0, 'Tres' => 10, 'Cuatro' => 0, 'Cinco' => 0,
        'Seis' => 0, 'Siete' => 0, 'Sota' => 2, 'Caballo' => 3, 'Rey' => 4
    );

    $palo = array('Oros', 'Copas', 'Espadas', 'Bastos');

    $figura = array('As', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Siete', 'Sota', 'Caballo', 'Rey');

    $cartasEchadas[] = "";
    $contadorCartasEchadas = 0;
    $puntosTotales = 0;

    do {
        $paloCarta = $palo[rand(0, 3)];
        $figuraCarta = $figura[rand(0, 9)];
        $puntosCarta = $puntuacion[$figuraCarta];
        $nombreCarta = "$figuraCarta de $paloCarta";
        if (!in_array($nombreCarta, $cartasEchadas)) {
            echo "$nombreCarta - $puntosCarta puntos<br>";
            $cartasEchadas[] = $nombreCarta;
            $contadorCartasEchadas++;
            $puntosTotales += $puntosCarta;
        }
    } while ($contadorCartasEchadas < 10);

    echo "<br><b>Total: $puntosTotales puntos</b>";
    ?>
    <br><br>
    <a href="10.php">
        << Volver</a> </body> </html>