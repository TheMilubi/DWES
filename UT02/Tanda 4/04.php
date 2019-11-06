<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: .1rem black solid;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    if (!isset($_GET['numeroTexto'])) {
        // Genera el array aleatorio
        for ($i = 0; $i < 100; $i++) {
            $numero[$i] = rand(0, 20);
            echo $numero[$i] . " ";
        }

        $numeroTexto = implode(" ", $numero);
        ?>
        <br><br>
        <form action="04.php" method="get">
            <p>
                Valor a sustituir: <input type="number" name="viejo" autofocus="" required=""><br>
            </p>
            <p>
                Valor nuevo: <input type="number" name="nuevo" required="">
            </p>
            <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
            <input type="submit" value="OK">
        </form>
    <?php
    } else {
        $numeroTexto = $_GET['numeroTexto'];
        $viejo = $_GET['viejo'];
        $nuevo = $_GET['nuevo'];

        $numero = explode(" ", $numeroTexto);

        foreach ($numero as $n) {
            if ($n == $viejo) {
                echo "<span style=\"color: green; font-weight: bold;\">$nuevo</span> ";
            } else {
                echo  "$n ";
            }
        }
        ?>
        <br><br>
        <a href="04.php">>> Volver</a>
    <?php
    }
    ?>
</body>

</html>