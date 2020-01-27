<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
</head>

<body>
    <h2>Detalles</h2>
    <div id="detalles">
        <?php
        require 'conexion.php';
        $mbd = null;
        try {
            $mbd = new PDO("mysql:host=$host;dbname=$db", $user, $passwd);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo "<table style='text-align:right'>";
            foreach ($mbd->query("SELECT * FROM TEST_CLIENTES WHERE id = '$id'") as $fila) {
                echo "<tr><td>ID:</td><td>${fila[0]}</td></tr>";
                echo "<tr><td>Nombre:</td><td>${fila[1]}</td></tr>";
                echo "<tr><td>Dirección:</td><td>${fila[2]}</td></tr>";
                echo "<tr><td>Descripción:</td><td>${fila[3]}</td></tr>";
                echo "<tr><td>Teléfono:</td><td>${fila[4]}</td></tr>";
                echo "<tr><td>Tipo:</td><td>${fila[5]}</td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
    <a href="ejercicio5.php"><< Volver</a>
</body>

</html>