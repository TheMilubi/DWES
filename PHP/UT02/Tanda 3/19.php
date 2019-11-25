<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 19</title>
</head>

<body>
    <h1>Pirámide</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            Altura: <input type="number" name="altura" min="1" max="10" autofocus=""><br>
        </p>
        <p>
            Figura:
            <select name="figura">
                <option value="bolita">Bolita</option>
                <option value="ladrillo">Ladrillo</option>
                <option value="pinguino">Pingüino</option>
                <option value="sol">Sol</option>
            </select>
        </p>
        <input type="submit" value="Aceptar">
    </form>
    <?php
    if (isset($_POST['altura'])) {
        $alturaMax = $_POST['altura'];
        $figura = $_POST['figura'];
        $altura = 1;
        $espacios = $alturaMax - 1;
        switch ($figura) {
            case 'bolita':
                $glifo = "•";
                break;
            case 'ladrillo':
                $glifo = "#";
                break;
            case 'pinguino':
                $glifo = "Å";
                break;
            case 'sol':
                $glifo = "*";
                break;
        }

        echo "<pre>";
        while ($altura <= $alturaMax) {

            // inserta espacios
            for ($i = 1; $i <= $espacios; $i++) {
                echo " ";
            }

            // pinta la línea
            for ($i = 1; $i < $altura * 2; $i++) {
                echo "$glifo";
            }

            echo "<br>";

            $altura++;
            $espacios--;
        }
    }
    echo "</pre>";
    ?>
</body>

</html>