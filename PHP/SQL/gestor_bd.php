<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestor BD</title>
</head>

<body>
    <div id="encabezado">
        <h1>Gestor para la Base de Datos</h1>
        <?php
        $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123");
        $_POST['dwes'] = $dwes;
        ?>
        <form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Tabla:
            <select name="tabla">
                <?php
                $tabla = "";
                $columnas = [];
                $num_columnas = 0;
                if (isset($_POST['tabla'])) {
                    $tabla = $_POST['tabla'];
                    $sql = "SELECT * FROM $tabla";
                    $resultado = $dwes->query($sql);
                    $registro = $resultado->fetch(PDO::FETCH_ASSOC);
                    $columnas = [];
                    foreach ($registro as $key => $value) {
                        if (preg_match('/^\d+$/', $value)) $columnas["$key"] = "number";
                        else $columnas["$key"] = "text";
                    }
                    $num_columnas = count($columnas);
                }
                $sql = "SHOW tables";
                $query = $dwes->query($sql);
                while ($registro = $query->fetch(PDO::FETCH_NUM)) {
                    echo "<option value='${registro[0]}'";
                    // Si se recibió un código de producto lo seleccionamos
                    // en el desplegable usando selected='true'
                    if (isset($tabla) && $tabla == $registro[0]) echo " selected='true'";
                    echo ">" . $registro[0] . "</option>";
                }
                ?>
            </select>
            <a href="mostrar.php">Mostrar tabla</a>
            <a href="gestor_bd.php">Volver</a>
        </form>
    </div>
    <div id="contenido">


    </div>
    <?php
    function mostrarDatos($tabla, $columnas, $primary_keys, $dwes)
    {
        $sql = "SELECT * FROM $tabla";
        $resultado = $dwes->query($sql);
        echo "<table>";
        echo "<tr>";
        foreach ($columnas as $columna => $tipo) {
            echo "<td>$columna</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($columnas as $columna => $tipo) {
            echo "<td><input type='$tipo' name='$columna'</td>";
        }
        echo "<a href='insertar.php'>Insertar</a>";
        echo "</tr>";
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($registro as $key => $value) {
                if (in_array($key, $primary_keys)) {
                    echo "<td name='c_$key'>$value</td>";
                }
                echo "<td>$value</td>";
            }
            echo "<td><a href='modificar.php'>Actualizar</a></td><td><a href='eliminar.php'>Eliminar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    function insertarDato($tabla, $columnas, $dwes)
    {
        $realizar = true;
        $sql = "INSERT INTO $tabla VALUES(";
        foreach ($columnas as $columna => $tipo) {
            if (isset($_POST["$columna"]) && $_POST["$columna"] != "") {
                $c = $_POST["$columna"];
                if ($tipo == "str") {
                    $sql .= "'$c', ";
                } else {
                    $sql .= "$c, ";
                }
            } else $realizar = false;
        }
        $sql = rtrim($sql);
        $sql = rtrim($sql, ',');
        $sql .= ")";
        if ($realizar) echo "Número de instancias afectadas: " . $dwes->exec($sql);
    }
    function actualizarDato($tabla, $columnas, $primary_keys, $dwes)
    {
        $realizar = true;
        $sql = "UPDATE $tabla SET ";
        foreach ($columnas as $columna => $tipo) {
            if (isset($_POST["$columna"])) {
                $sql .= $columna . " = ";
                $c = $_POST["$columna"];
                if ($tipo == "str") {
                    $sql .= "'$c', ";
                } else {
                    $sql .= "$c, ";
                }
            } else $realizar = false;
        }
        $sql = rtrim($sql);
        $sql = rtrim($sql, ',');
        $sql .=  " WHERE ";
        foreach ($primary_keys as $columna) {
            if (isset($_POST["c_$columna"])) {
                $sql .= $columna . " = ";
                $c = $_POST["c_$columna"];
                $tipo = $columnas["$columna"];
                if ($tipo == "str") {
                    $sql .= "'$c' AND ";
                } else {
                    $sql .= "$c AND";
                }
            } else $realizar = false;
        }
        $sql = rtrim($sql);
        $sql = rtrim($sql, 'AND');
        if ($realizar) echo "Número de instancias afectadas: " . $dwes->exec($sql);
    }
    function borrarDato($tabla, $columnas, $primary_keys, $dwes)
    {
        $realizar = true;
        $sql = "DELETE FROM $tabla WHERE ";
        foreach ($primary_keys as $columna) {
            if (isset($_POST["c_$columna"])) {
                $sql .= $columna . " = ";
                $c = $_POST["c_$columna"];
                $tipo = $columnas["$columna"];
                if ($tipo == "str") {
                    $sql .= "'$c' AND ";
                } else {
                    $sql .= "$c AND ";
                }
            } else $realizar = false;
        }
        $sql = rtrim($sql);
        $sql = rtrim($sql, 'AND');
        // echo $sql;
        if ($realizar) echo "Número de instancias afectadas: " . $dwes->exec($sql);
    }
    ?>

    <div id="pie">
        <?php
        // Si se produjo algún error se muestra en el pie
        unset($dwes);
        ?>
    </div>
</body>

</html>