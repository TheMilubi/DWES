<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muestra de stock con PDO</title>
</head>

<body>
    <div id="encabezado">
        <h1>Ejercicio: Conjuntos de resultados en PDO</h1>
        <form id="form_seleccion" action="stockpdo.php" method="post">
            <span>Producto: </span>
            <select name="producto">
                <?php
                if (isset($_POST['producto'])) $producto = $_POST['producto'];
                // Rellenamos el desplegable con los datos de todos los productos
                $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123");
                $sql = "SELECT cod, nombre_corto FROM producto";
                $query = $dwes->query($sql);
                while ($registro = $query->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value='" . $registro->cod . "'";
                    // Si se recibió un código de producto lo seleccionamos
                    // en el desplegable usando selected='true'
                    if (isset($producto) && $producto == $registro->cod) echo " selected='true'";
                    echo ">" . $registro->nombre_corto . "</option>";
                }
                ?>
            </select>
            <input type="submit" value="Mostrar stock" name="enviar" />
        </form>
    </div>
    <div id="contenido">
        <h2>Stock del producto en las tiendas:</h2>
        <?php
        // Si se recibió un código de producto y no se produjo ningún error
        // mostramos el stock de ese producto en las distintas tiendas
        if (isset($producto)) {
            $sql = <<<SQL
SELECT tienda.nombre, stock.unidades
FROM tienda INNER JOIN stock ON tienda.cod=stock.tienda
WHERE stock.producto='$producto'
SQL;
            $resultado = $dwes->query($sql);
            while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
                echo "<p>Tienda " . $registro->nombre . ": " . $registro->unidades . " unidades.</p>";
            }
        }
        ?>
    </div>

    <div id="pie">
        <?php
        // Si se produjo algún error se muestra en el pie
        unset($dwes);
        ?>
    </div>
</body>

</html>