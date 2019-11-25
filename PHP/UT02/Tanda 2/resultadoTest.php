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
    include "preguntas.php";
    corregir($preguntas);
    function corregir($preguntas)
    {
        $aciertos = 0;
        $fallos = 0;
        for ($i = 0; $i < 10; $i++) {
            $r = isset($_POST["$i"]) ? $_POST["$i"] : -1;
            if ($r == $preguntas[$i]['correcta']) {
                //echo $_POST["$i"];
                $aciertos++;
            } elseif ($r != -1){
                //echo $_POST["$i"];
                $fallos++;
            }
        }
        $nota = $aciertos - ($fallos * 0.25);
        echo "<br>Aciertos: $aciertos<br>Fallos: $fallos<br>Nota: $nota";
    }
    ?>
</body>

</html>