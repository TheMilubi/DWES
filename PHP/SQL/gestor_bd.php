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
        <?php $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123"); ?>
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
                        if (preg_match('/^\d+$/', $value)) $columnas["$key"] = "int";
                        else $columnas["$key"] = "str";
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
            Orden:
            <select name="orden">
                <?php
                if (isset($_POST['orden'])) {
                    $_SESSION['orden'] = $_POST['orden'];
                }
                if (isset($_SESSION['orden'])) {
                    $orden = $_SESSION['orden'];
                }
                ?>
                <option <?php if (isset($orden) && $orden == "SELECT") echo " selected='true'"; ?> value="SELECT">SELECT</option>
                <option <?php if (isset($orden) && $orden == "INSERT") echo " selected='true'"; ?> value="INSERT">INSERT</option>
                <option <?php if (isset($orden) && $orden == "UPDATE") echo " selected='true'"; ?> value="UPDATE">UPDATE</option>
                <option <?php if (isset($orden) && $orden == "DELETE") echo " selected='true'"; ?> value="DELETE">DELETE</option>
            </select>

            <?php
            if (isset($tabla) && isset($orden) && ($orden == "UPDATE" || $orden == "DELETE")) {
                echo "<p>Condición: <br>";
                $sql = "show index from $tabla where Key_name = 'PRIMARY'";
                $query = $dwes->query($sql);
                $primary_keys = [];
                while ($registro = $query->fetch(PDO::FETCH_ASSOC)) {
                    $primary_keys[] = $registro['Column_name'];
                    echo "<p>${registro['Column_name']}: ";
                    $tipo = $columnas["${registro['Column_name']}"];
                    $type = ($tipo == "int") ? 'number' : 'text';
                    echo "<input type='" . $type . "' name='c_${registro['Column_name']}'></p>";
                }
                echo "</p>";
            }

            ?>
            <?php
            if (isset($tabla) && isset($orden) && ($orden == "INSERT" || $orden == "UPDATE")) {
                echo "<p>Valores a insertar: <br>";
                foreach ($columnas as $columna => $tipo) {
                    echo "<p>$columna: ";
                    $tipo = ($tipo == "int") ? 'number' : 'text';
                    echo "<input type='" . $tipo . "' name='$columna'></p>";
                }
                echo "</p>";
            }
            ?>

            <input type="submit" value="Realizar orden" name="enviar" />
            <a href="gestor_bd.php">Volver</a>
        </form>
    </div>
    <div id="contenido">
        <h2>Resultado de consulta u orden</h2>
        <?php
        // Si se recibió un código de producto y no se produjo ningún error
        // mostramos el stock de ese producto en las distintas tiendas
        if (isset($orden) && isset($tabla)) {
            $sql = "";
            switch ($orden) {
                case "SELECT":
                    mostrarDatos($tabla, $dwes);
                    break;
                case "INSERT":
                    insertarDato($tabla, $columnas, $dwes);
                    mostrarDatos($tabla, $dwes);
                    break;
                case "UPDATE":
                    actualizarDato($tabla, $columnas, $primary_keys, $dwes);
                    mostrarDatos($tabla, $dwes);
                    break;
                case "DELETE":
                    borrarDato($tabla, $columnas, $primary_keys, $dwes);
                    mostrarDatos($tabla, $dwes);
                    break;
            }
        }
        ?>
    </div>
    <?php
    function mostrarDatos($tabla, $dwes)
    {
        $sql = "SELECT * FROM $tabla";
        $resultado = $dwes->query($sql);
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>[";
            foreach ($registro as $key => $value) {
                echo "<pre>   $key: $value<br></pre>";
            }
            echo "]</p>";
        }
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
