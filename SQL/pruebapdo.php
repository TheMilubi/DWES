<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO y mariadb</title>
</head>

<body>
    <?php
    $dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', 'abc123');
    $todo_bien = true;
    // Iniciamos la transacción
    $dwes->beginTransaction();
    $sql = 'UPDATE stock SET unidades=1 WHERE producto="PAPYRE62GB" AND tienda=1';
    if ($dwes->exec($sql) == 0) $todo_bien = false;
    $sql = 'INSERT INTO `stock` (`producto`, `tienda`, `unidades`) VALUES ("PAPYRE62GB", 2, 1)';
    if ($dwes->exec($sql) == 0) $todo_bien = false;
    // Si todo fue bien, confirmamos los cambios
    // y en caso contrario los deshacemos
    if ($todo_bien == true) {
        $dwes->commit();
        print "<p>Los cambios se han realizado correctamente.</p>";
    } else {
        $dwes->rollback();
        print "<p>No se han podido realizar los cambios.</p>";
    }
    unset($dwes);
    ?>
    

</body>

</html>