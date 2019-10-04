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
            <tr><td rowspan="3">DWES</td><td rowspan="2">EIE</td><td rowspan="2">DIW</td><td rowspan="3">DIW</td><td rowspan="2">DWES</td></tr>
            <tr></tr>
        <?php
            echo '<tr><td>DAW</td><td>DWES</td><td>DWEC</td></tr>';
            echo '<tr><td colspan="5">RECREO</td></tr>';
        ?>
            <tr><td rowspan="3">DWEC</td><td rowspan="3">DIW</td><td rowspan="2">DWES</td><td rowspan="2">DAW</td><td rowspan="2">DWEC</td></tr>
            <tr></tr>
            <tr><td>EIE</td><td>EIE</td><td>DIW</td></tr>
        <?php
            echo '</table>';
        ?>
    </p>
</body>
</html>