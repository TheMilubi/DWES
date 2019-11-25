<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO MySql Query</title>
</head>

<body>
    <?php
    $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123");

    $resultado = $dwes->query("SELECT producto, unidades FROM stock");

    while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {

        echo "Producto " . $registro->producto . ": " . $registro->unidades . "<br />";
    }
    ?>
</body>

</html>