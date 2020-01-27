<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <div id="muestra">
        <?php 
            require 'conexion.php';
            try{
            $mbd = new PDO("mysql:host=$host;dbname=$db", $user, $passwd);
            echo '<table>';
            foreach($mbd->query("SELECT * FROM TEST_CLIENTES;") as $fila){
                echo '<tr>';
                echo "<td>${fila[1]}</td>";
                echo "<td>${fila[2]}</td>";
                echo "<td>${fila[4]}</td>";
                echo '</tr>';
            }
            echo '</table>';
            }catch(Exception $e){
                echo $e->getMessage();
            }
        ?>
    </div>
</body>
</html>