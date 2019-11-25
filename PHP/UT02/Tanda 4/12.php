<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 12</title>
</head>

<body>
    <h2>Prueba tu vocabulario en inglés</h2>
    <?php
    $diccionario = array(
        "ordenador" => "computer",
        "gato" => "cat",
        "rojo" => "red",
        "árbol" => "tree",
        "pingüino" => "penguin",
        "sol" => "sun",
        "agua" => "water",
        "viento" => "wind",
        "siesta" => "nap",
        "arriba" => "up",
        "ratón" => "mouse",
        "estadio" => "arena",
        "calumnia" => "aspersion",
        "aguacate" => "avocado",
        "cuerpo" => "body",
        "concurso" => "contest",
        "cena" => "dinner",
        "salida" => "exit",
        "lenteja" => "lentil",
        "cacerola" => "pan",
        "pastel" => "pie",
        "membrillo" => "quince"
    );

    if (!isset($_GET['espanol'])) {
        echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";
        $espanol = [];

        // Extrae las palabras españolas
        foreach ($diccionario as $clave => $valor) {
            $palabrasEspanolas[] = $clave;
        }

        // Elige 5 palabras en español sin que se repita ninguna
        $contadorPalabras = 0;
        do {
            $palabra = $palabrasEspanolas[rand(0, 19)];
            if (!in_array($palabra, $espanol)) {
                $espanol[] = $palabra;
                $contadorPalabras++;
            }
        } while ($contadorPalabras < 5);

        echo '<form action="12.php" method="get">';
        for ($i = 0; $i < 5; $i++) {
            echo "<br>" . $espanol[$i] . " ";
            echo '<input type="hidden" name="espanol[' . $i . ']" value="' . $espanol[$i] . '">';
            echo '<input type="text" name="ingles[' . $i . ']" ><br>';
        }
        echo '<br><input type="submit" value="Aceptar">';
        echo '</form>';
    } else {
        $espanol = $_GET['espanol'];
        $ingles = $_GET['ingles'];

        for ($i = 0; $i < 5; $i++) {
            if ($diccionario[$espanol[$i]] == $ingles[$i]) {
                echo '<span style="color: green;">' . $espanol[$i] . ": " . $ingles[$i];
                echo " - correcto</span><br>";
            } else {
                echo '<span style="color: red;">' . $espanol[$i] . ": " . $ingles[$i];
                echo " - incorrecto</span>, la respuesta correcta es <b>" . $diccionario[$espanol[$i]] . "</b><br>";
            }
        }
    }
    ?>
    <br>
    <a href="12.php">>> Volver</a>
</body>

</html>