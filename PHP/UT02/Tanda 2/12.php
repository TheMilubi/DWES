<!-- Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten 
en el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación 
obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal 
andan de conocimientos en las diferentes asignaturas del curso. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 12</title>
</head>

<body>
    <form action="resultadoTest.php" method="post">
        <?php
        include "preguntas.php";
        //echo $preguntas[0]['pregunta'];
        for ($i = 0; $i < 10; $i++) {
            echo "<br><label for='$i'>" . ($i + 1) . '. ' . ($preguntas[$i]['pregunta']) . "</label><br><br>";
            foreach ($preguntas[$i]['respuestas'] as $indice => $respuesta) {
                echo "<input type='radio' name='$i' value='$indice'>$respuesta<br>";
            }
        }
        
        ?>
        <br>
        <input type="submit" value="Corregir test">
    </form>
</body>

</html>