<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 12</title>
</head>

<body>
    <form action="testFidelidad.php" method="post">
        <?php
        include "fidelidad.php";
        //echo $preguntas[0]['pregunta'];
        for ($i = 0; $i < 10; $i++) {
            echo "<br><label for='$i'>" . ($fidelidad[$i]) . "</label><br><br>";
            echo "<input type='radio' name='$i' value='1'>Verdadero<br>";
            echo "<input type='radio' name='$i' value='0'>Falso<br>";
        }
        ?>
        <br>
        <input type="submit" value="Corregir test">
    </form>
</body>

</html>