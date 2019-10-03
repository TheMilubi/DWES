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
            <tr><td rowspan="3">DWES</td><td rowspan="2">EIE</td><td rowspan="2">DIW</td></tr>
            <tr><td>vaso</td><td>glass</td></tr>
            <tr><td>dedo</td><td>finger</td></tr>
            <tr><td>casa</td><td>house</td></tr>
            <tr><td>cuerpo</td><td>body</td></tr>
            <tr><td>pierna</td><td>leg</td></tr>
        <?php
            echo '</table>';
        ?>
    </p>
</body>
</html>