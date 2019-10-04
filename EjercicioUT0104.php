<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EjercicioUT0104</title>
</head>
<body>
    <p>
        <?php 
            echo '<table>';
        ?>
        
            <tr><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th></tr>
            <tr><td>DWES</td><td>EIE</td><td>DIW</td><td>DIW</td><td>DWES</td></tr>
            <tr><td>DWES</td><td>EIE</td><td>DIW</td><td>DIW</td><td>DWES</td></tr>
            <?php
            echo '<tr><td>DWES</td><td>DAW</td><td>DWES</td><td>DIW</td><td>DWEC</td></tr>';
            echo '<tr><td colspan="5">Recreo</td></tr>';
            ?>
            <tr><td>DWEC</td><td>DIW</td><td>DWES</td><td>DAW</td><td>DWEC</td></tr>
            <tr><td>DWEC</td><td>DIW</td><td>DWES</td><td>DAW</td><td>DWEC</td></tr>
            <tr><td>DWEC</td><td>DIW</td><td>EIE</td><td>EIE</td><td>DIW</td></tr>
            
        <?php
            echo '</table>';
        ?>
    </p>
</body>
</html>