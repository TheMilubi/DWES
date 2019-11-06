<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: .1rem black solid;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Creador de gráfico de temperatura</h1>
    <?php
    if (!isset($_GET['temperatura'])) {
        // Pide los datos de las temperaturas
        $mes = array(
            "Enero&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Febrero&nbsp;&nbsp;&nbsp;", "Marzo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Abril&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Mayo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Junio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",
            "Julio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Agosto&nbsp;&nbsp;&nbsp;&nbsp;", "Septiembre", "Octubre&nbsp;&nbsp;&nbsp;", "Noviembre&nbsp;", "Diciembre&nbsp;"
        );
        ?>
        Por favor, introduzca la temperatura media de cada mes: <br><br>
        <form action="05.php" method="get">
            <?php
                echo "<table>";
                for ($i = 0; $i < 12; $i++) {
                    echo "<tr><td>$mes[$i]</td><td> <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br></td></tr>";
                }
                echo "</table><br>";
                ?>
            <input type="submit" value="OK">

        </form>

    <?php
    } else {
        // Pinta el diagrama de barras
        $temperatura = $_GET['temperatura'];
        echo "<table>";
        foreach ($temperatura as $mes => $temperaturaMes) {
            echo "<tr><td>$mes </td><td>";
            // Pinta la barra
            for ($i = 0; $i < $temperaturaMes; $i++) {
                echo "[+]";
            }
            echo " $temperaturaMes" . "ºC<br></td></tr>";
        }
        echo "</table>";
        ?>
        <br>
        <a href="05.php">>> Volver</a>
    <?php
    }
    ?>
</body>

</html>