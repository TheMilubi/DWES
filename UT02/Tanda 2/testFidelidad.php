<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    include "fidelidad.php";
    corregir($preguntas);
    function corregir($preguntas)
    {
        $puntos = 0;
        for ($i = 0; $i < 10; $i++) {
            $r = isset($_POST["$i"]) ? $_POST["$i"] : 0;
            if ($r == 1) {
                //echo $_POST["$i"];
                $puntos = $puntos + 3;
            }
        }
        echo "Puntos: $puntos<br><br>";
        //Puntuación entre 0 y 10:
        if ($puntos <= 10) {
            echo '¡Enhorabuena! tu pareja parece ser totalmente fiel.';
        }
        //Puntuación entre 11 y 21:
        elseif ($puntos <= 21) {
            echo 'Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.';
        }
        // Puntuación entre 22 y 30:
        else {
            echo 'Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.';
        }
    }
    ?>
</body>

</html>