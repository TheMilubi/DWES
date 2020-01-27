<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <style>
        .premium {
            color: green;
        }
    </style>
</head>

<body>
    <?php
    require 'conexion.php';
    $mbd = null;
    try {
        $mbd = new PDO("mysql:host=$host;dbname=$db", $user, $passwd);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['description']) && !empty($_POST['telf']) && !empty($_POST['type'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $description = $_POST['description'];
        $telf = $_POST['telf'];
        $type = $_POST['type'];
        $sql = "INSERT INTO TEST_CLIENTES VALUE(NULL, '$name', '$address','$description','$telf','$type')";
        $mbd->query($sql);
        unset($_POST);
    }
    ?>
    <h2>Inserta</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Nombre: <input type="text" name="name" value='<?php echo $_POST['name'] ?>'><br><br>
        Dirección: <input type="text" name="address" value='<?php echo $_POST['address'] ?>'><br><br>
        Descripción: <input type="text" name="description" value='<?php echo $_POST['description'] ?>'><br><br>
        Teléfono: <input type="tel" name="telf" value='<?php echo $_POST['telf'] ?>'><br><br>
        Tipo: <input type="text" name="type" value='<?php echo $_POST['type'] ?>'><br><br>
        <input type="submit" value="Enviar">
    </form>

    <h2>Muestra</h2>
    <div id="muestra">
        <?php
        echo '<table>';
        foreach ($mbd->query("SELECT * FROM TEST_CLIENTES;") as $fila) {
            echo '<tr';
            if ($fila[5] == 'P') echo ' class="premium"';
            echo '>';
            echo "<td>${fila[1]}</td>";
            echo "<td>${fila[2]}</td>";
            echo "<td>${fila[4]}</td>";
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
    <br>
    <a href="">
        << Volver</a> </body> </html>