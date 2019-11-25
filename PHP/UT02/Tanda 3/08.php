<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T3 08</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td, caption{
            border: solid black 2px;
            padding: 1rem;
            text-align: center;

        }
    </style>
</head>

<body>
    <!-- Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML). -->
    <h1>Tabla multiplicar</h1>
    <form action="08.php" method="post">
        <input type="number" name="num" id="num">
        <input type="submit" value="Crear tabla">
    </form>
    <br>
    <table>
        <?php 
            if (isset($_POST['num'])){
                $num = $_POST['num'];
                echo "<caption>Tabla del $num</caption>";
                for($i = 1; $i <= 10; $i++){
                    echo '<tr>';
                    echo "<td>x $i</td>";
                    echo "<td>" . ($num * $i) . "</td>";
                    echo '</tr>';
                }
            }
        ?>
    </table>

</body>

</html>